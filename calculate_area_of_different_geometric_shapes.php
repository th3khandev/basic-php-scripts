<?php

// Calculate circle area
function circle_area($radius) {
    // pi * r^2
    return 3.1416 * $radius * $radius;
}
// circle radius
$radius = 10;
// Show circle area
echo "Circle area: " . circle_area($radius) . "\r\n";


// Calculate rectangle area
function rectangle_area($length, $width) {
    // length * width
    return $length * $width;
}
// rectangle length and width
$length = 5;
$width = 10;
// Show rectangle area
echo "Rectangle area: " . rectangle_area($length, $width) . "\r\n";


// Calculate square area
function square_area($length) {
    // length^2
    return $length * $length;
}
// square length
$length = 10;
// Show square area
echo "Square area: " . square_area($length) . "\r\n";


// Calculate triangle area
function triangle_area($base, $height) {
    // (base*height) / 2
    return ($base * $height) / 2;
}
// triangle base and height
$base = 10;
$height = 8;
// Show triangle area
echo "Triangle area: " . triangle_area($base, $height) . "\r\n";

// Calculate ellipse area
function ellipse_area($radius1, $radius2) {
    // pi * r1 * r2
    return 3.1416 * $radius1 * $radius2;
}
// ellipse radius1 and radius2
$radius1 = 10;
$radius2 = 10;
// Show ellipse area
echo "Ellipse area: " . ellipse_area($radius1, $radius2) . "\r\n";

// Calculate trapezoid area
function trapezoid_area($base_least, $base_greatest, $height) {
    // ((base_least + base_greatest) / 2) * height
    return (($base_least + $base_greatest) / 2) * $height;
}
// trapezoid base_least, base_greatest and height
$base_least = 10;
$base_greatest = 20;
$height = 10;
// Show trapezoid area
echo "Trapezoid area: " . trapezoid_area($base_least, $base_greatest, $height) . "\r\n";


// Calculate cylinder area
function cylinder_area($radius, $height) {
    // (2 * pi * r * h) + (2 * pi * r^2)
    return (2 * 3.1416 * $radius * $height) + (2 * 3.1416 * $radius * $radius);
}
// cylinder radius and height
$radius = 10;
$height = 20;
// Show cylinder area
echo "Cylinder area: " . cylinder_area($radius, $height) . "\r\n";


// Calculate Hexagon area
function hexagon_area($side) {
    // (3 * sqrt(3) * s^2) / 2
    return (3 * sqrt(3) * $side * $side) / 2;
}
// hexagon side
$side = 10;
// Show hexagon area
echo "Hexagon area: " . hexagon_area($side) . "\r\n";

?>