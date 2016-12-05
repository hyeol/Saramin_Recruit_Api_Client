Saramin Recruit API Client
====

## Websites
- [api.saramin.co.kr](https://api.saramin.co.kr)

## Requirements
- PHP 5.4.0 or higher

## Installation
	
```bash
composer require Saramin/RecruitApi
```

## Example
```PHP
require_once '../vendor/autoload.php';

use Saramin\RecruitApi\Client;
use Saramin\RecruitApi\Parameters\Keywords;
use Saramin\RecruitApi\Parameters\Stock;

$client = new Client();

$recruitList = $client
    ->pushParameter(new Keywords('사람인'))
    ->pushParameter(new Stock('kospi'))
    ->offset(1)
    ->take(5)
    ->orderBy('ud')
    ->get()
    ->asArray();
```
