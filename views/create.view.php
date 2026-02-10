<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<h1>Product Toevoegen</h1>
<form method="POST">
    <label for="name">Naam: </label>
    <input id="name" name="name" type="text" placeholder="Bijvoorbeeld: Melk" value="<?= $_POST["name"] ?? '' ?>" required><br><br>
    <label for="quantity">Aantal: </label>
    <input id="quantity" name="quantity" type="number" type="number" min="1" step="1" value="<?= $_POST["quantity"] ?? 1 ?>" required><br><br>
    <label for="price">Prijs: </label>
    <input id="price" name="price" type="number" type="number" min="0.00" step="0.01" value="<?= $_POST["price"] ?? number_format((float) 0.00, 2) ?>" required><br><br>
    <button type="submit">Toevoegen</button>
</form>

<?php foreach (["name", "quantity", "price"] as $field): ?>
    <?php if (isset($errors[$field])): ?>
        <p class="error"><?= $errors[$field] ?></p>
    <?php endif; ?>
<?php endforeach; ?>

<?php require("partials/footer.php") ?>