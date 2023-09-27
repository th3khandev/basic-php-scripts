<?php
// Relative file path, example: ./miarchivo.txt
$path_file = 'miarchivo.txt';
// Content
$content = "Este es el contenido del archivo";
// Open or create file
$file = fopen($path_file, 'w');
// Write in file
fwrite($file, $content);
// Close file
fclose($file);

// Please note that this content replaces the content of the file
