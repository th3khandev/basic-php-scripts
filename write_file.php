<?php
// Ubicacion del archivo (path), ejemplo ./miarchivo.txt
$path_file = 'miarchivo.txt';
// Contenido para agregar al archivo.
$content = "Este es el contenido del archivo";
// Abre o crea el archivo en modo escritura
$file = fopen($path_file, 'w');
// Escribe el contenido en el archivo
fwrite($file, $content);
// Cierra el archivo
fclose($file);

// Ten en cuenta que este contenido remplazara
//  el contenido existente en el archivo.
