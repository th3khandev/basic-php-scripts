<?php

// JSON string
$json = '{
    "name": "Anthony",
    "age": 29,
    "city": "Caracas",
    "country": "Venezuela"
}';

// Convert JSON string to Array
$data = json_decode($json, true);

// Print data
print_r($data);
