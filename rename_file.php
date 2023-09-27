<?php

// Relative file path
$current_file_path = "miarchivo.txt";

// New name for the file
$new_file_path = "miarchivo2.txt";

// Rename file
if (rename($current_file_path, $new_file_path)) {
    echo "Archivo renombrado exitosamente.";
} else {
    echo "Error al renombrar el archivo.";
}