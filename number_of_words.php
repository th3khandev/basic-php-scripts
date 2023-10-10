<?php

// Generate text
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sapien vel lacinia bibendum, velit sapien bibendum nisl, vel bibendum sapien sapien vel";

// Count number of words
$number_of_words = str_word_count($text);

// Count number of characters
$number_of_characters = strlen($text);

// Print number of words
echo "Número de palabras en el texto: $number_of_words\n";

// Print number of characters
echo "Número de caracteres en el texto: $number_of_characters\n";

