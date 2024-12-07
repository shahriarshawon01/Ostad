<?php
echo "Enter a number: ";
$number = trim(fgets(STDIN));

if (!is_numeric($number)) {
    echo "Please enter a valid number.\n";
} else {
    if ($number > 0) {
        echo "Input number is positive : $number";
    } elseif ($number < 0) {
        echo "Input number is negative : $number";
    } else {
        echo "Input number is zero : $number";
    }
}
