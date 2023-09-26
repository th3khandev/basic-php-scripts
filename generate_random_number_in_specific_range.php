<?php

// Número mínimo
$min = 1;

// Número máximo
$max = 100;

// Generar número aleatorio
$random_number_with_rand = rand($min, $max);

// Generar otro numero aleatorio con mt_rand
$random_number_with_mt_rand = mt_rand($min,$max);

// Mostrar número aleatorio
echo "Número aleatorio con rand: $random_number_with_rand \n";
echo "Número aleatorio con mt_rand: $random_number_with_mt_rand \n";