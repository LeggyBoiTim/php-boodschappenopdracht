<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<h1>Product Toevoegen</h1>
<form method="POST" action="/">
    <label for="name">Naam: </label>
    <input name="name" type="text"><br><br>
    <label for="quantity">Aantal: </label>
    <input name="quantity" type="number" type="number" min="0" step="1" value=0><br><br>
    <label for="unit-price">Prijs: </label>
    <input name="unit-price" type="number" type="number" min="0" step="0.01" value=0.00><br><br>
    <button type="submit">Toevoegen</button>
</form>

<?php require("partials/footer.php") ?>