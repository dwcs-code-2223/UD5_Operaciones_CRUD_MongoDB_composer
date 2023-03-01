<?php
require_once __DIR__ . '/vendor/autoload.php';

$collection_name="sample restaurants";

$collection = (new MongoDB\Client)->test->$collection_name;

$cursor = $collection->find(
    [
        'cuisine' => 'Italian',
        'borough' => 'Manhattan',
    ],
    [
        'projection' => [
            'name' => 1,
            'borough' => 1,
            'cuisine' => 1,
            '_id' => 0
        ],
        'limit' => 4,
    ]
);

foreach($cursor as $restaurant) {
    echo "<pre>";
   var_dump($restaurant);
   echo "</pre>";
};