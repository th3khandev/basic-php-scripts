<?php

// rutal del archivo
$file_path = 'miarchivo.txt';

// Abrir el archivo en modo escritura
$file = fopen($file_path, 'a');

// Contenido que se adicionara
$content = "Este es un contenido adicional\r\n";

// Escribir en el archivo
fwrite($file, $content);

// Cerrar el archivo
fclose($file);

// Mostrar el contenido del archivo
echo file_get_contents($file_path);