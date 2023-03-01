<?php
require_once __DIR__ . '/vendor/autoload.php';

$collection = (new MongoDB\Client)->test->zips;

$cursor = $collection->find(['city' => 'JERSEY CITY', 'state' => 'NJ']);

foreach ($cursor as $document) {
    echo $document['_id'].", ". $document['city']. ", ".$document['state'] ."<br/>";
   
}