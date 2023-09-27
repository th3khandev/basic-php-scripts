<?php

// Min number
$min = 1;

// Max number
$max = 100;

// Generate randon number
$random_number_with_rand = rand($min, $max);

// Generate other random number with mt_rand function
$random_number_with_mt_rand = mt_rand($min,$max);

// Show results
echo "Número aleatorio con rand: $random_number_with_rand \n";
echo "Número aleatorio con mt_rand: $random_number_with_mt_rand \n";