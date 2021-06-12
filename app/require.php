<?php
require "./vendor/autoload.php";
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
$client = new CoinGeckoClient();
// $data = $client->derivatives()->getExchanges();
// $data = $client->simple()->getPrice('0x,bitcoin', 'usd,rub');
// $data = $client->coins()->getList();
$data = $result = $client->coins()->getMarkets('usd');

$response = $client->getLastResponse();
$headers = $response->getHeaders();

print_r($data['0']);

?>