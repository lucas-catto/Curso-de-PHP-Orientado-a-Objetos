<?php

class Order
{
    public $number;
    public $client;
}

class Client
{
    public $name;
    public $address;
}

$client = new Client;
$client->name = 'steve';
$client->address = 'yyy yyyy yyyyy yyyyyy';

$order = new Order;
$order->number = 123;
$order->client = $client;

$data = [
    'number' => $order->number,
    'name' => $order->client->name,
    'address' => $order->client->address
];

var_dump($data);

/*
array(3) {
  ["number"]=>
  int(123)
  ["name"]=>
  string(5) "steve"
  ["address"]=>
  string(21) "yyy yyyy yyyyy yyyyyy"
}
*/
