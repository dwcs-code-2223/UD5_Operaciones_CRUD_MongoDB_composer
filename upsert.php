<?php
require_once __DIR__ . '/vendor/autoload.php';



$collection = (new MongoDB\Client)->test->users;
$collection->drop();

$updateResult = $collection->updateOne(
    ['name' => 'Bob'],
    ['$set' => ['state' => 'ny']],
    ['upsert' => true]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
printf("Upserted %d document(s)\n", $updateResult->getUpsertedCount());

$oid = $updateResult->getUpsertedId();
$upsertedDocument = $collection->findOne([
    '_id' =>$oid,
]);
echo "<pre>";
var_dump($upsertedDocument);
echo "</pre>";