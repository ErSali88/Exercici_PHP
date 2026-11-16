<?php
declare(strict_types=1);

// APARTADO 2 · Los parámetros


/**
 * Muestra un mensaje de bienvenida con el nombre.
 *
 * @param string $nom Nombre de la persona
 * @return void Solo escribe por pantalla
 */
function saluda(string $nom): void
{
    echo '<p>Bienvenido/a a BitBazar, ' . $nom . '.</p>';
}


/**
 * Muestra la ficha de un producto.
 *
 * @param string $nom   Nombre del producto
 * @param float  $preu  Precio sin IVA
 * @param int    $estoc Unidades disponibles
 * @return void Solo escribe por pantalla
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    echo '<div class="targeta">';
    echo '<h3>' . $nom . '</h3>';
    echo '<p>' . number_format($preu, 2, ',', '.') . ' EUR · ' . $estoc . ' unidades</p>';
    echo '</div>';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 2 · Los parámetros</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 2 · Los parámetros</p>
</header>

<main>

    <h2>Ejercicio 1 · saluda()</h2>

    <?php saluda('Marta'); ?>
    <?php saluda('Jordi'); ?>
    <?php saluda('Lucía'); ?>


    <h2>Ejercicio 2 · targeta()</h2>

    <div class="graella">
        <?php targeta('Teclado mecánico', 79.90, 4); ?>
        <?php targeta('Ratón vertical', 29.95, 7); ?>
        <?php targeta('Hub USB-C 7 en 1', 34.90, 20); ?>
    </div>


    <h2>Ejercicio 3 · argumentos en el orden equivocado</h2>

    <?php
    // Llamada a propósito mal hecha: el precio (float) va donde se espera
    // el nombre (string). Está dentro de un try/catch para que la página
    // no se pare y se vea el error.
    try {
        targeta(79.90, 'Teclado mecánico', 4);
    } catch (TypeError $e) {
        echo '<div class="error">Error de tipos: ' . $e->getMessage() . '</div>';
    }

    // Qué pasa y por qué: los argumentos van POR ORDEN. El primer valor
    // va al primer parámetro ($nom, string), pero le llega un 79.90
    // (float). Como el archivo tiene declare(strict_types=1), PHP no
    // convierte el número en texto por su cuenta y lanza un TypeError.
    // Sin strict_types habría funcionado, pero con datos mezclados.
    ?>

    <p>La llamada correcta, ya arreglada:</p>

    <div class="graella">
        <?php targeta('Teclado mecánico', 79.90, 4); ?>
    </div>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
