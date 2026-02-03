<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (empty($_POST["name"])) {
        $errors["name"] = "Het product heeft een naam nodig.";
    }
    if (empty($_POST["quantity"]) || $_POST["quantity"] < 1) {
        $errors["quantity"] = "Het product heeft een aantal van 1 of hoger nodig.";
    }
    if (empty($_POST["price"]) || $_POST["price"] < 1.0) {
        $errors["price"] = "Het product heeft een prijs van 0.01 of hoger nodig.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO groceries (name, quantity, price) VALUES (:name, :quantity, :price);", [
            "name" => $_POST["name"],
            "quantity" => $_POST["quantity"],
            "price" => $_POST["price"]
        ]);
    }
}

require "./views/create.view.php";