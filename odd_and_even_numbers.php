<?php
echo "Números pares e impares entre 1 y 100: \n";
$pair_numbers = [];
$odd_numbers = [];

// Create a for cycle from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    // Validate if is pair
    if ($i % 2 == 0) {
        // Add to my list of pair numbers
        array_push($pair_numbers, $i);
    } else {
        // Add to my list of odd numbers
        array_push($odd_numbers, $i);
    }
}

// Show pair numbers
echo "Números pares: ";
// Create a string from the pair numbers array 
echo implode(", ", $pair_numbers)."\n\r";
// Show odd numbers
echo "Números impares: ";
// Create a string from the odd numbers array
echo implode(", ", $odd_numbers)."\n\r";
?>
