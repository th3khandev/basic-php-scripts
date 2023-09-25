<?php
echo "Números pares e impares entre 1 y 100: \n";
$pair_numbers = [];
$odd_numbers = [];

// crear un ciclo for desde 1 a 100
for ($i = 1; $i <= 100; $i++) {
    // Validar si es par
    if ($i % 2 == 0) {
        // Agregar a mi lista de numeros pares.
        array_push($pair_numbers, $i);
    } else {
        // Agregar a mi lista de numeros impares
        array_push($odd_numbers, $i);
    }
}

// Mostrar resultados
echo "Números pares: ";
// Creamos un string a partir del array de numeros pares.
echo implode(", ", $pair_numbers)."\n\r";
echo "Números impares: ";
// Creamos un string a partir del array de numeros impares.
echo implode(", ", $odd_numbers)."\n\r";
?>
