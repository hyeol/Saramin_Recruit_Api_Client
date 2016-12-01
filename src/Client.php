<?php

namespace Saramin\RecruitApi;

use GuzzleHttp\Client as HttpClient;
use Saramin\RecruitApi\Contracts\ParameterInterface;
use Saramin\RecruitApi\Exceptions\SriValidationException;

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

    /** @var HttpClient */
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
     * @param ParameterInterface $parameter
     *
     * @return $this
     */
    public function pushParameter(ParameterInterface $parameter)
    {
        array_push($this->parameters, $parameter);

        return $this;
    }

    /**
     * @return \Saramin\RecruitApi\HttpResponseParser
     */
    public function request()
    {
        return new HttpResponseParser($this->http->request('GET', self::API_BASE_URI, [
            'query' => $this->getParameterAsArray()
        ]));
    }

    /**
     * @return mixed
     */
    public function requestAsJson()
    {
        return $this->request()->asJson();
    }

    /**
     * @return array
     * @throws SriValidationException
     */
    private function getParameterAsArray()
    {
        $arrayParameter = [];

        /** @var ParameterInterface $parameter */
        foreach ($this->parameters as $parameter) {
            $this->validator->validate($parameter);

            $arrayParameter = array_merge($arrayParameter, $parameter->getQueryArray());
        }

        return $arrayParameter;
    }
}
