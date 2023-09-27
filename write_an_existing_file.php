<?php

// Relative file path
$file_path = 'miarchivo.txt';

// Open file in write mode
$file = fopen($file_path, 'a');

// Content to add in file
$content = "Este es un contenido adicional\r\n";

// Write in file
fwrite($file, $content);

// Close file
fclose($file);

// Show content
echo file_get_contents($file_path);