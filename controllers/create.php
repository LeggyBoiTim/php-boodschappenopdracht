<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("INSERT INTO `groceries` (`item`, `quantity`, `price`) VALUES (`:item`, `:quantity`, `:price`);", [
        "item" => $_POST["item"],
        "quantity" => $_POST["quantity"],
        "price" => $_POST["price"]
    ]);
    dd($_POST);
}

require "./views/create.view.php";