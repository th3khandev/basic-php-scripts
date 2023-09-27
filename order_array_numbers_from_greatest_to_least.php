<?php

// Array of numbers
$numbers = [1, 5, 3, 2, 4];

// Order numbers greatest to least with rsort function
rsort($numbers);

// Show numbers
echo "Números ordenados de mayor a menor: ";
// Create a string from the numbers array
echo implode(", ", $numbers)."\n\r";

?>