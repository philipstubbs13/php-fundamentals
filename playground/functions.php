<?php

function printHello() {
    echo "Hello World";
}

// bool, int, float, string, array, object, callable
function calculateTax(float $price, float $tax=0.05, string $taxName="") {
    return $price * $tax;
}

calculateTax(3000, taxName: "State tax");
calculateTax(tax: 0.1, price: 3000);