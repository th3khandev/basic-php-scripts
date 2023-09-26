<?php

// Ruta relativa del archivo.
$file_path = 'miarchivo.txt';

// Abrir el archivo en modo lectura
$file = fopen($file_path, 'r');

// Leer el contenido del archivo
$file_content = fread($file, filesize($file_path));

// Cerrar el archivo
fclose($file);

// Mostrar el contenido del archivo
echo $file_content;