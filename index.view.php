<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Boodschappenlijst</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style="text-align: left;">Product</th>
                <th style="text-align: left;">Prijs</th>
                <th style="text-align: left;">Hoeveelheid</th>
                <th style="text-align: left;">Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groceries as $grocery) : ?>
                <tr>
                    <td><?= $grocery["name"] ?></td>
                    <td class="price"><?= $grocery["price"] ?></td>
                    <td><input type="number" min="0" step="1" value="<?= $grocery["amount"] ?>"></td>
                    <td class="price"><?= $subtotal_price($grocery) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" style="text-align: left;">Totaal</th>
                <td class="price"><?= $total_price ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>