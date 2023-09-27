<?php

// Relative file path
$file_path = 'miarchivo.txt';

// Delete file
if (unlink($file_path)) {
    echo "El archivo $file_path ha sido eliminado";
} else {
    echo "El archivo $file_path no se pudo eliminar";
}