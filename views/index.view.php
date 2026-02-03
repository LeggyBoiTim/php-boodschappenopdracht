<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<h1>Overzicht</h1>
<table id="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Hoeveelheid</th>
            <th>Subtotaal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($groceries as $grocery) : ?>
            <tr>
                <td><?= htmlspecialchars($grocery["name"]) ?></td>
                <td class="price"><?= htmlspecialchars($grocery["price"]) ?></td>
                <td><input type="number" min="0" step="1" value="<?= htmlspecialchars($grocery["quantity"]) ?>"></td>
                <td class="price"><?= $subtotal_price($grocery) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Totaal</th>
            <td class="price"><?= $total_price ?></td>
        </tr>
    </tfoot>
</table>

<?php require("partials/footer.php") ?>