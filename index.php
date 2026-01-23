<?php

$groceries = [
    [
        "name" => "Rijst",
        "price" => 1.99,
        "amount" => 3
    ],
    [
        "name" => "Broccoli",
        "price" => 2.53,
        "amount" => 5
    ],
    [
        "name" => "Koekjes",
        "price" => 1.55,
        "amount" => 2
    ],
    [
        "name" => "Noten",
        "price" => 0.96,
        "amount" => 1
    ]
];

function sum_groceries($carry, $grocery) {
    $carry += $grocery["price"] * $grocery["amount"];
    return $carry;
}

$subtotal_price = function ($grocery) {
    return number_format($grocery["price"] * $grocery["amount"], 2);
};

$total_price = number_format(array_reduce($groceries, "sum_groceries"), 2);

require "index.view.php";