<?php

// Array of numbers
$numbers = [1, 5, 3, 2, 4];

// Order numbers least to greatest with sort function
sort($numbers);

// Show numbers
echo "Números ordenados de menor a mayor: ";
// Create a string from the numbers array
echo implode(", ", $numbers)."\n\r";
?>