<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "entities".DIRECTORY_SEPARATOR.'User.php';





$collection = (new MongoDB\Client)->test->users;
$collection->drop();

$user = new User();
$user->setName('Bob');
$user->setState('ny');
$user->setCountry('us');
echo "<pre>";
print_r($user->toArray());
echo "</pre>";

$insertOneResult =$collection->insertOne($user->toArray());

 
printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());