<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<h1>Product Toevoegen</h1>
<form method="POST">
    <label for="name">Naam: </label>
    <input id="name" name="name" type="text" placeholder="Bijvoorbeeld: Melk" required><br><br>
    <label for="quantity">Aantal: </label>
    <input id="quantity" name="quantity" type="number" type="number" min="0" step="1" value=0 required><br><br>
    <label for="price">Prijs: </label>
    <input id="price" name="price" type="number" type="number" min="0" step="0.01" value=0.00 required><br><br>
    <button type="submit">Toevoegen</button>
</form>
<?php if (isset($errors["name"])) : ?>
    <p class="error"><?= $errors["name"] ?></p>
<?php endif; ?>
<?php if (isset($errors["quantity"])) : ?>
    <p class="error"><?= $errors["quantity"] ?></p>
<?php endif; ?>
<?php if (isset($errors["price"])) : ?>
    <p class="error"><?= $errors["price"] ?></p>
<?php endif; ?>

<?php require("partials/footer.php") ?>