<?php 
        
    $nomProducte = "Camiseta Maduro";
    $descripcio = "Prenda deportiva ligera y transpirable, con botones delanteros y diseño cómodo, ideal para jugar o vestir de forma casual.";

    $preu = 99.99;
    $iva = 0.21;
    $stock = 10;
    $ref = "CAM-1425376";

    $importIva = $preu * $iva;
    $total = $preu + $importIva;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tienda Online</h1>
        <p>Esto es una tienda online</p>
    </header>

    <main>
        <article class="producte">

            <h2>Camiseta</h2>

            <p class="descripcio">  <?= $nomProducte ?> </p>
            <p class="preu">Preu sense IVA <?= $preu; ?> EUR </p>
            <p class="preuIva"> IVA (21%) <?= $importIva; ?> EUR</p>
            <p class="total">Total: <?= $total; ?> EUR </p>

            <p class="estoc"> Stock Disponible: <?= $stock ?></p>
            <p class="ref"> Referencia: <?= $ref ?></p>
        </article>
    </main>

    <footer>
        <p>Footer de la tienda S.L</p>
    </footer>

</body>
</html>
