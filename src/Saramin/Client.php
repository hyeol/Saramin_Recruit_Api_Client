<?php

namespace Saramin;

use GuzzleHttp\Client;

class RecruitApiClient
{
    const API_BASE_PATH = 'http://api.saramin.co.kr/search';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function request($parameter)
    {
        return $this->client->request('GET', self::API_BASE_PATH, $parameter);
    }
}
