<?php 
    
    const IVA = 0.21;
    const BOTIGA = 'Peru';
    const MONEDA = '€';
    const DESCOMPTE_SOCI = 0.10;
    
    $nomProducte = "Camiseta Maduro";
    $descripcio = "Prenda deportiva ligera y transpirable, con botones delanteros y diseño cómodo, ideal para jugar o vestir de forma casual.";

    $preu = 99.99;
    $stock = 10;
    $ref = "CAM-1425376";

    $importIva = $preu * IVA;
    $total = $preu + $importIva;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="style.c">
</head>
<body>

    <header>
        <h1>Tienda Online</h1>
        <p>Esto es una tienda online</p>
    </header>

    <main>
        <article class="producte">

            <h2>Camiseta</h2>

            <p class="descripcio"><?= $nomProducte ?></p>

            <p class="preu">
                Preu sense IVA: <?= $preu ?> <?= MONEDA ?>
            </p>

            <p class="preuIva">
                IVA (<?= IVA * 100 ?>%): <?= $importIva ?> <?= MONEDA ?>
            </p>

            <p class="total">
                Total: <?= $total ?> <?= MONEDA ?>
            </p>

            <p class="estoc">
                Stock Disponible: <?= $stock ?>
            </p>

            <p class="ref">
                Referencia: <?= $ref ?>
            </p>

        </article>
    </main>

    <footer>
        <p>Footer de la tienda S.L</p>
    </footer>

</body>
</html>