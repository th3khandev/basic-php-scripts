<?php

// Ruta relativa del archivo
$file_path = "miarchivo.txt";

// Palabra a eliminar
$word = "palabra_eliminar";

// Leer el contenido del archivo en un arreglo de lineas
$lines = file($file_path);

// Abrir el archivo en modo escritura
$file = fopen($file_path, 'w');

foreach ($lines as $line) {
    // Si la linea no contiene la palabra a eliminar
    if (strpos($line, $word) === false) {
        // Escribir la linea en el archivo
        fwrite($file, $line);
    }
}

// Cerrar el archivo
fclose($file);

// Mostrar contenido modificado del archivo
echo file_get_contents($file_path);

?>