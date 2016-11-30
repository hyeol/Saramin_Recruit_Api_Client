<?php

namespace Saramin\RecruitApiClient;

use GuzzleHttp\Client as HttpClient;
use Saramin\RecruitApiClient\Contracts\ParameterInterface;
use Saramin\RecruitApiClient\Exceptions\SriInvalidParameterException;

class Client
{
    const API_BASE_PATH = 'http://api.saramin.co.kr/search';
    private $parameters = [];

    /**
     * @param ParameterInterface $parameter
     */
    public function pushParameter(ParameterInterface $parameter)
    {
        array_push($this->parameters, $parameter);
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
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
     * @return array
     * @throws SriInvalidParameterException
     */
    private function getParameterAsArray()
    {
        $arrayParameter = [];

        /** @var ParameterInterface $parameter */
        foreach ($this->parameters as $parameter) {
            if (! $parameter->validate()) {
                throw new SriInvalidParameterException();
            }

            $arrayParameter = array_merge($arrayParameter, $parameter->getQueryArray());
        }

        return $arrayParameter;
    }
}
