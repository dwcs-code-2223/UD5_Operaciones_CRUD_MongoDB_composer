<?php
require_once __DIR__ . '/vendor/autoload.php';



$collection = (new MongoDB\Client)->test->users;
$collection->drop();

$insertOneResult_bob = $collection->insertOne(['name' => 'Bob', 'state' => 'ny']);

$bob_oid = $insertOneResult_bob->getInsertedId();

$insertOneResult_alice =$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$alice_oid = $insertOneResult_alice->getInsertedId();

var_dump($bob_oid);
var_dump($alice_oid);

$updateResult = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($bob_oid)],
    ['$set' => ['country' => 'us']]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());