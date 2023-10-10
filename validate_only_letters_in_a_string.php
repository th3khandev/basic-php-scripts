<?php

// Generate text with only letters
$only_letters = "TextoConColoLetras";

// Generate text with letters and others characters
$letters_and_others = "Texto con letras, números 1234 y espacios";

// Create array
$texts = [
    $only_letters,
    $letters_and_others
];

// Execute foreach
foreach ($texts as $text) {
    // Validate if text contains only letters
    if (ctype_alpha($text)) {
        echo "El texto: ($text) contiene solo letras\n";
    } else {
        echo "El texto: ($text) contiene caracteres que no son letras\n";
    }
}