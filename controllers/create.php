<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("INSERT INTO `tim_siegers_boodschappenlijst`.`groceries` (name, quantity, price) VALUES (':name', ':quantity', ':price');", [
        "name" => $_POST["name"],
        "quantity" => intval($_POST["quantity"]),
        "price" => floatval($_POST["price"])
    ]);
}

require "./views/create.view.php";