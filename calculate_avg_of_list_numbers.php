<?php

// Lista de numeros
$list_numbers = [1, 20, 40.4, .4, 90, 67, 100, 10.8];

// Calcular promedio
$avg = array_sum($list_numbers) / count($list_numbers);

// Mostrar promedio
echo "El promedio de los numeros es: $avg";
?>