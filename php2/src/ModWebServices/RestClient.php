<?php
// Example of the Guzzle HTTP Client

// Get the Composer autoloader
require __DIR__ . '/../../vendor/autoload.php';

// Get a client instance
$client = new GuzzleHttp\Client();

// Make the request
$response = $client->request('GET', 'http://maps.googleapis.com/maps/api/geocode/json', [
    'query' => [
        'address' => '350+5th+Avenue+New+York,+NY',
        'sensor' => false,
    ]
]);

// Test for return status
if($response->getStatusCode() === 200){
    // Output the JSON directly
    echo $response->getBody();

    // Output a PHP array
    print_r(json_decode($response->getBody()));
}