<?php
declare(strict_types=1);

// APARTADO 6 · El ámbito de las variables


// ---------- Ejercicio 1 ----------

$botiga = 'BitBazar';   // variable global


/**
 * Versión MALA: intenta usar $botiga sin recibirla. No la ve.
 *
 * @return string Texto con el nombre de la tienda (vacío por el warning)
 */
function mostra(): string
{
    return 'Estamos en ' . $botiga;
}


/**
 * Versión BUENA: el nombre entra por un parámetro.
 *
 * @param string $nom Nombre de la tienda
 * @return string Texto con el nombre de la tienda
 */
function mostraBe(string $nom): string
{
    return 'Estamos en ' . $nom;
}


// ---------- Ejercicio 2 ----------

/**
 * Contador con variable local normal: se reinicia en cada llamada.
 *
 * @return int Siempre devuelve 1
 */
function comptaLocal(): int
{
    $n = 0;
    $n++;

    return $n;
}


/**
 * Contador con variable static: recuerda su valor entre llamadas.
 *
 * @return int 1 la primera vez, 2 la segunda, 3 la tercera...
 */
function comptaStatic(): int
{
    static $n = 0;
    $n++;

    return $n;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 6 · El ámbito de las variables</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 6 · El ámbito de las variables</p>
</header>

<main>

    <h2>Ejercicio 1 · variable global</h2>

    <p>Versión mala: <?php echo mostra(); ?></p>

    <?php
    // Warning exacto que sale en el log de errores (el aviso de esta
    // página es a propósito). PEGA AQUÍ el tuyo, con tu ruta de WAMP:
    //
    // Warning: Undefined variable $botiga in C:\wamp64\www\M0613_ACT05\apartat6.php on line 19
    //
    // Por qué: $botiga está fuera de la función y las funciones no ven
    // las variables de fuera. Dentro de mostra() $botiga no existe.
    ?>

    <p>Versión buena: <?php echo mostraBe($botiga); ?></p>


    <h2>Ejercicio 2 · local contra static</h2>

    <p>comptaLocal(): <?php echo comptaLocal(); ?>,
    <?php echo comptaLocal(); ?>,
    <?php echo comptaLocal(); ?></p>

    <p>comptaStatic(): <?php echo comptaStatic(); ?>,
    <?php echo comptaStatic(); ?>,
    <?php echo comptaStatic(); ?></p>

    <?php
    // Diferencia: comptaLocal() crea $n = 0 en cada llamada y la variable
    // muere cuando la función acaba, así que siempre da 1, 1, 1.
    // comptaStatic() declara $n con static: la inicialización solo se
    // hace la primera vez y el valor se conserva entre llamadas, así
    // que da 1, 2, 3.
    ?>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
