<?php

$groceries = [
    [
        "name" => "Rijst",
        "amount" => 3,
        "price" => 1.99
    ],
    [
        "name" => "Broccoli",
        "amount" => 5,
        "price" => 2.53
    ],
    [
        "name" => "Koekjes",
        "amount" => 2,
        "price" => 1.55
    ],
    [
        "name" => "Noten",
        "amount" => 1,
        "price" => 0.96
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

require "./views/index.view.php";