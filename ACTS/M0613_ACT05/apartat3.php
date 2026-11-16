<?php
declare(strict_types=1);

// APARTADO 3 · return no es echo


/**
 * Escribe por pantalla el precio con IVA (21 %). No devuelve nada.
 *
 * @param float $base Precio sin IVA
 * @return void Solo escribe por pantalla
 */
function preuAmbIvaEcho(float $base): void
{
    echo $base * 1.21;
}


/**
 * Calcula el precio con IVA (21 %) y lo devuelve.
 *
 * @param float $base Precio sin IVA
 * @return float Precio con IVA
 */
function preuAmbIva(float $base): float
{
    return $base * 1.21;
}


/**
 * Da formato a un precio: dos decimales y la palabra EUR.
 *
 * @param float $preu Precio a formatear
 * @return string Precio formateado, por ejemplo 1.234,50 EUR
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 3 · return no es echo</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 3 · return no es echo</p>
</header>

<main>

    <h2>Ejercicio 1 · echo contra return</h2>

    <p>Con echo (la función escribe ella sola): <?php preuAmbIvaEcho(100.0); ?></p>

    <p>Con return (yo decido qué hacer): <?php echo formatPreu(preuAmbIva(100.0)); ?></p>


    <h2>Ejercicio 2 · usar el valor devuelto</h2>

    <?php
    $preus = [79.90, 29.95, 34.90];

    $total = 0.0;

    foreach ($preus as $preu) {
        $total += preuAmbIva($preu);
    }
    ?>

    <p>Total con IVA: <?php echo formatPreu($total); ?></p>

    <p>Producto más caro con IVA: <?php echo formatPreu(preuAmbIva(max($preus))); ?></p>

    <p>Intento de hacer lo mismo con la versión echo:</p>

    <?php
    try {
        echo formatPreu(preuAmbIvaEcho(max($preus)));
    } catch (TypeError $e) {
        echo '<div class="error">Error de tipos: ' . $e->getMessage() . '</div>';
    }

    // Por qué no se puede: preuAmbIvaEcho() ya ha escrito el valor por
    // pantalla y no devuelve nada (void, o sea null). formatPreu() espera
    // un float y recibe null, así que da TypeError. Con echo el valor
    // "se ha gastado" al escribirlo: no se puede sumar, comparar ni
    // pasar a otra función. Con return sí.
    ?>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
