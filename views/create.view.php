<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<h1>Product Toevoegen</h1>
<form method="POST">
    <label for="name">Naam: </label>
    <input id="name" name="name" type="text" placeholder="Bijvoorbeeld: Melk" value="<?= $_POST["name"] ?? '' ?>" required>
    <?php if (isset($errors["name"])): ?>
        <span class="error"><?= $errors["name"] ?></span>
    <?php endif; ?><br><br>
    <label for="quantity">Aantal: </label>
    <input id="quantity" name="quantity" type="number" type="number" min="1" step="1" value="<?= $_POST["quantity"] ?? 1 ?>" required>
    <?php if (isset($errors["quantity"])): ?>
        <span class="error"><?= $errors["quantity"] ?></span>
    <?php endif; ?><br><br>
    <label for="price">Prijs: </label>
    <input id="price" name="price" type="number" type="number" min="0.00" step="0.01" value="<?= $_POST["price"] ?? number_format((float) 0.00, 2) ?>" required>
    <?php if (isset($errors["price"])): ?>
        <span class="error"><?= $errors["price"] ?></span>
    <?php endif; ?><br><br>
    <button type="submit">Toevoegen</button>
</form>

<?php require("partials/footer.php") ?>