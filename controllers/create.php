<?php

require "Database.php";
require "Validator.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (!Validator::string($_POST["name"], 1, 50)) {
        $errors["name"] = "Het product heeft een naam nodig met een maximum van 50 letters.";
    }
    if (!Validator::integer($_POST["quantity"], 1)) {
        $errors["quantity"] = "Het product heeft een aantal van 1 of hoger nodig.";
    }
    if (!Validator::decimal($_POST["price"], 0.0)) {
        $errors["price"] = "Het product heeft een prijs van 0.00 of hoger nodig.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO groceries (name, quantity, price) VALUES (:name, :quantity, :price);", [
            "name" => htmlspecialchars($_POST["name"]),
            "quantity" => htmlspecialchars($_POST["quantity"]),
            "price" => htmlspecialchars($_POST["price"])
        ]);
        header("Location: ./");
    }
}

require "./views/create.view.php";