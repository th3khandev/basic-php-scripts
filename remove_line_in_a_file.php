<?php

// Relative file path
$file_path = "miarchivo.txt";

// Word to delete
$word = "palabra_eliminar";

// Read content file in a line array
$lines = file($file_path);

// Open file in write mode
$file = fopen($file_path, 'w');

foreach ($lines as $line) {
    // If the line contain the word to delete
    if (strpos($line, $word) === false) {
        // Write line in file
        fwrite($file, $line);
    }
}

// Close file
fclose($file);

// Show content
echo file_get_contents($file_path);

?>