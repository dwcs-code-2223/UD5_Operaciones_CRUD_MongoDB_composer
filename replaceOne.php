<?php
require_once __DIR__ . '/vendor/autoload.php';






$collection = (new MongoDB\Client)->test->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
//63ff3c7a0d3fa0b4fd0c0c12
$updateResult = $collection->replaceOne(
    ['name' => 'Bob'],
    ['name' => 'Robert', 'otro' => 'ca']
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());