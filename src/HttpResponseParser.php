<?php

namespace Saramin\RecruitApiClient;

use Psr\Http\Message\ResponseInterface;

class HttpResponseParser
{
    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * HttpResponseParser constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function asJson()
    {
    }

    public function asXml()
    {
    }

    public function __toString()
    {
        return "";
    }
}
