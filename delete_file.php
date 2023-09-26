<?php

// Ruta relativa del archivo
$file_path = 'miarchivo.txt';

// Eliminar archivo
if (unlink($file_path)) {
    echo "El archivo $file_path ha sido eliminado";
} else {
    echo "El archivo $file_path no se pudo eliminar";
}