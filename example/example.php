<?php

require_once '../vendor/autoload.php';

use Saramin\RecruitApi\Client;
use Saramin\RecruitApi\Parameters\Keywords;

$client = new Client();

$request = $client
    ->pushParameter(new Keywords('삼성'))
    ->requestAsJson();

var_export($request);
exit;