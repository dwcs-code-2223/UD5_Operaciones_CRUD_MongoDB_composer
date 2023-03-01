<?php
require_once __DIR__ . '/vendor/autoload.php';



$collection = (new MongoDB\Client)->test->zips;

//$document = $collection->findOne(["zip" => '94301']);
$document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId('5c8eccc1caa187d17ca6ed16')]);
//Esto no funcionaría:
$document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId('5c8eccc1caa187d17ca6ed16')]);


var_dump($document);