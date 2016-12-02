<?php

require_once '../vendor/autoload.php';

use Saramin\RecruitApi\Client;
use Saramin\RecruitApi\Parameters\Keywords;

$client = new Client();

$request = $client
    ->pushParameter(new Keywords('삼성'))
    ->offset(1)
    ->take(5)
    ->orderBy('ud')
    ->request()
    ->asArray();

var_export($request);
exit;