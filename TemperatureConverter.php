<?php
echo "Enter the temperature value: ";
$temperature = (float)readline();

echo "Choose type:\n";
echo "1 is Celsius to Fahrenheit\n";
echo "2 is Fahrenheit to Celsius\n";

echo "Select number : ";

$temperature_type = (int)readline();

switch ($temperature_type) {
    case 1:
        $converted = ($temperature * 9 / 5) + 32;
        echo "$temperature °C = $converted °F\n";
        break;
    case 2:
        $converted = ($temperature - 32) * 5 / 9;
        echo "$temperature °F = $converted °C\n";
        break;
    default:
        echo "Please select 1 or 2.\n";
        break;
}
