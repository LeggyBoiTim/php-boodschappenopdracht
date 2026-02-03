<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("INSERT INTO groceries (name, quantity, price) VALUES (:name, :quantity, :price);", [
        "name" => $_POST["name"],
        "quantity" => $_POST["quantity"],
        "price" => $_POST["price"]
    ]);
}

require "./views/create.view.php";