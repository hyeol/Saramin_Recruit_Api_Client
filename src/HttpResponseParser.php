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
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function asArray()
    {
        return (array) json_decode($this->asJson(), true);
    }

    public function asJson()
    {
        return json_encode(simplexml_load_string($this->asXml()));
    }

    public function asXml()
    {
        return (string) $this->response->getBody();
    }

    public function __toString()
    {
        return '';
    }
}
