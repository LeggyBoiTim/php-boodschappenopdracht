<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);
$groceries = $db->query("SELECT * FROM groceries")->fetchAll();

function sum_subtotal($grocery) {
    return $grocery["price"] * $grocery["quantity"];
};

function sum_total_callback($carry, $grocery) {
    return $carry += $grocery["price"] * $grocery["quantity"];
}

function sum_total($groceries) {
    return array_reduce($groceries, "sum_total_callback");
};

$subtotal_price = function ($grocery) {
    return number_format((float) sum_subtotal($grocery), 2);
};

$total_price = number_format((float) sum_total($groceries), 2);

require "./views/index.view.php";