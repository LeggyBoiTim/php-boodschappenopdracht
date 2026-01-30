<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);
$groceries = $db->query("SELECT * FROM groceries")->fetchAll();

function sum_groceries($carry, $grocery) {
    return $carry += $grocery["price"] * $grocery["quantity"];
}

$subtotal_price = function ($grocery) {
    return number_format($grocery["price"] * $grocery["quantity"], 2);
};

$total_price = number_format(array_reduce($groceries, "sum_groceries"), 2);

require "./views/index.view.php";