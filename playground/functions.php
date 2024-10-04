<?php

function printHello() {
    echo "Hello World";
}

// bool, int, float, string, array, object, callable
function calculateTax(float $price, float $tax = 0.05) {
    return $price * $tax;
}

calculateTax(3000);
calculateTax(tax: 0.10, price: 3000);
