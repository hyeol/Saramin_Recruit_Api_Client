<?php

class ClientTest extends \BaseTestCase
{
    /** @test */
    public function request()
    {
        $client = new \Saramin\RecruitApi\Client();

        $request = $client->pushParameter(new \Saramin\RecruitApi\Parameters\Keywords('삼성'))->requestAsJson();

        $this->assertTrue(true);
    }
}