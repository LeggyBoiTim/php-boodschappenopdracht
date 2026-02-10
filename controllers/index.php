<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);
$groceries = $db->query("SELECT * FROM groceries")->fetchAll();

$subtotal_price = function ($grocery) {
    return $grocery["price"] * $grocery["quantity"];
};

function sum_total_callback($carry, $grocery) {
    return $carry += $grocery["price"] * $grocery["quantity"];
}

$total_price = array_reduce($groceries, "sum_total_callback");

require "./views/index.view.php";