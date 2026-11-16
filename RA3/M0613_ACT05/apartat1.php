<?php
declare(strict_types=1);

// APARTADO 1 · La primera función


/**
 * Muestra la cabecera de la tienda.
 *
 * @return void Solo escribe por pantalla
 */
function capcalera(): void
{
    echo '<header>';
    echo '<h1>BitBazar</h1>';
    echo '<p>Tu tienda de material informático</p>';
    echo '</header>';
}


/**
 * Muestra el pie de página con el nombre de la tienda y el año actual.
 *
 * @return void Solo escribe por pantalla
 */
function peu(): void
{
    echo '<footer>';
    echo 'BitBazar · ' . date('Y');
    echo '</footer>';
}


/**
 * Tercera función: está declarada pero NO se llama en ningún sitio.
 *
 * @return void Solo escribe por pantalla
 */
function funcioSenseCridar(): void
{
    echo '<p>Este texto no saldrá nunca en la página.</p>';
}

// Comentario del ejercicio: declarar una función no la ejecuta.
// Solo existe y espera. Como funcioSenseCridar() no se llama en ningún
// sitio, su echo no se ejecuta y no pasa nada en la página.

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 1 · La primera función</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php capcalera(); ?>

<main>
    <h2>Apartado 1 · La primera función</h2>

    <p>La cabecera de arriba sale una vez. El pie de abajo sale tres veces,
    pero está escrito una sola vez en el código.</p>
</main>

<?php peu(); ?>
<?php peu(); ?>
<?php peu(); ?>

</body>
</html>
