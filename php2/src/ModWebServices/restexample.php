<?php
// Make a request for JSON
$url = 'http://maps.googleapis.com/maps/api/geocode/%s'
     . '?address=350+5th+Avenue+New+York,+NY&sensor=false';
$json = file_get_contents(sprintf($url, 'json'));

// Decode into a standard class object
$resultsObj = json_decode($json);

// Decode into an array
$resultsArr = json_decode($json, true);

// Make a request for XML
$xml = file_get_contents(sprintf($url, 'xml'));

// Load a SimpleXmlElement object
$smplxml = simplexml_load_string($xml);

// Output something
var_dump($resultsArr);
echo $smplxml->asXml();
