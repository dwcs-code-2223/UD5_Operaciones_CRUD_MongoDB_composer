<?php
require_once __DIR__ . '/vendor/autoload.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$collection = (new MongoDB\Client)->test->users;
//$collection->drop();
//
//$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
//$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$updateResult = $collection->updateOne(
    ['state' => 'ny'],
    ['$set' => ['country' => 'us']]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());

