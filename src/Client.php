<?php

namespace Saramin\RecruitApi;

use GuzzleHttp\Client as HttpClient;
use Saramin\RecruitApi\Contracts\ParameterInterface;
use Saramin\RecruitApi\Exceptions\SriValidationException;
use Saramin\RecruitApi\Parameters\Count;
use Saramin\RecruitApi\Parameters\Sort;
use Saramin\RecruitApi\Parameters\Start;

class Client
{
    const API_BASE_URI = 'http://api.saramin.co.kr/job-search';
    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @var Validator
     */
    private $validator;

    /**
     * @var HttpClient
     */
    private $http;

    /**
     * Client constructor.
     *
     * @param \GuzzleHttp\Client            $http
     * @param \Saramin\RecruitApi\Validator $validator
     */
    public function __construct(HttpClient $http = null, Validator $validator = null)
    {
        $this->http = !is_null($http) ? $http : new HttpClient();

        $this->validator = !is_null($validator) ? $validator : new Validator();
    }

    /**
     * @param \Saramin\RecruitApi\Contracts\ParameterInterface $parameter
     *
     * @return $this
     */
    public function pushParameter(ParameterInterface $parameter)
    {
        array_push($this->parameters, $parameter);

        return $this;
    }

    /**
     * @param int $offset
     *
     * @return \Saramin\RecruitApi\Client
     */
    public function offset($offset = 1)
    {
        return $this->pushParameter(new Start($offset));
    }

    /**
     * @param int $count
     *
     * @return \Saramin\RecruitApi\Client
     */
    public function take($count = 10)
    {
        return $this->pushParameter(new Count($count));
    }

    /**
     * @param $sort
     *
     * @return \Saramin\RecruitApi\Client
     */
    public function orderBy($sort)
    {
        return $this->pushParameter(new Sort($sort));
    }

    /**
     * @return \Saramin\RecruitApi\HttpResponseParser
     */
    public function get()
    {
        return new HttpResponseParser($this->http->request('GET', self::API_BASE_URI, [
            'query' => $this->buildQuery()
        ]));
    }

    /**
     * @return array
     * @throws SriValidationException
     */
    private function buildQuery()
    {
        $query = [];

        /** @var ParameterInterface $parameter */
        foreach ($this->parameters as $parameter) {
            $this->validator->validate($parameter);

            $query = array_merge($query, $parameter->getQueryArray());
        }

        return $query;
    }
}
