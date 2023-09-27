<?php

// List of numbers
$list_numbers = [1, 20, 40.4, .4, 90, 67, 100, 10.8];

// Calculate average
$avg = array_sum($list_numbers) / count($list_numbers);

// Show average
echo "El promedio de los numeros es: $avg";
?>