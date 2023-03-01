<?php
require_once __DIR__ . '/vendor/autoload.php';

$collection = (new MongoDB\Client)->test->users;

$insertOneResult = $collection->insertOne(['_id' => 1, 'name' => 'Alice']);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());