<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = round(($fahrenheit - 32) / 1.8, 2);
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// Celsius naar Fahrenheit

$fahrenheit2 = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit2} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$kelvin = ($celsius + 273);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// Fahrenheit naar Kelvin
$kelvin2 = ($fahrenheit -32 + 273.15) / 1.8;
echo "{$fahrenheit} graden fahrenheit = {$kelvin2} graden kelvin. <br/>";
?>