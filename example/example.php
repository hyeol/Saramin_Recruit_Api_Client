<?php

require_once '../vendor/autoload.php';

use Saramin\RecruitApi\Client;

$client = new Client();

$request = $client
    ->pushParameter(new \Saramin\RecruitApi\Parameters\Keywords('사람인'))
    ->pushParameter(new \Saramin\RecruitApi\Parameters\JobType([15]))
    ->pushParameter(new \Saramin\RecruitApi\Parameters\Location([101000], [101000], [101000]))
    ->offset(1)
    ->take(1)
    ->orderBy('ud')
    ->get()
    ->asArray();

var_export($request);
exit;