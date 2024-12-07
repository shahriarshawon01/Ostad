<?php
echo "Enter consumed units : ";
$unitConsumed  = trim(fgets(STDIN));

$totalBill = 0;

if ($unitConsumed <= 100) {
    $totalBill = $unitConsumed * 5;
} elseif ($unitConsumed <= 200) {
    $totalBill = $unitConsumed * 10;
} elseif ($unitConsumed >= 201) {
    $totalBill = $unitConsumed * 15;
}

echo "Consumed Units : $unitConsumed units\n";
echo "Total bill : $totalBill TK.";
