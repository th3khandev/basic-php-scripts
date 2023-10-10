<?php

// Create array
$array = array(
    "name" => "Anthony",
    "age" => 30,
    "city" => "Caracas",
    "country" => "Venezuela",
);

// Convert array to JSON string
$json_string = json_encode($array);

// Output JSON string
echo $json_string;
