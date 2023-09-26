<?php

// Ruta relativa del archivo
$current_file_path = "miarchivo.txt";

// Nuevo nombre del archivo
$new_file_path = "miarchivo2.txt";

// Renombrar archivo
if (rename($current_file_path, $new_file_path)) {
    echo "Archivo renombrado exitosamente.";
} else {
    echo "Error al renombrar el archivo.";
}