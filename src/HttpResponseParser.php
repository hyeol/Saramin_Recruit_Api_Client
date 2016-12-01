<?php

namespace Saramin\RecruitApi;

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
        return $this->response->getBody();
    }

    public function asXml()
    {
    }

    public function __toString()
    {
        return "";
    }
}
