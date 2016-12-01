<?php

namespace Saramin\RecruitApiClient;

use GuzzleHttp\Client as HttpClient;
use Saramin\RecruitApiClient\Contracts\ParameterInterface;
use Saramin\RecruitApiClient\Exceptions\SriValidationException;

class Client
{
    const API_BASE_PATH = 'http://api.saramin.co.kr/search';
    /**
     * @var array
     */
    private $parameters = [];
    /**
     * @var Validator
     */
    private $validator;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->validator = new Validator();
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
     * @return \Saramin\RecruitApiClient\HttpResponseParser
     */
    public function request()
    {
        $http = new HttpClient();

        return new HttpResponseParser(
            $http->request('GET', self::API_BASE_PATH, [
                'query' => $this->getParameterAsArray()
            ])
        );
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
