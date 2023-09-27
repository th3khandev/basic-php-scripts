<?php

// Relative path file
$file_path = 'miarchivo.txt';

// Open file in read mode
$file = fopen($file_path, 'r');

// Read content file
$file_content = fread($file, filesize($file_path));

// Close file
fclose($file);

// Show content
echo $file_content;