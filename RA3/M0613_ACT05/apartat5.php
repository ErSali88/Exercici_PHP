<?php
declare(strict_types=1);

// APARTADO 5 · Los tipos y strict_types


/**
 * Calcula el área de un triángulo: base por altura entre dos.
 *
 * @param float $base   Base del triángulo
 * @param float $altura Altura del triángulo
 * @return float Área
 */
function area(float $base, float $altura): float
{
    return $base * $altura / 2;
}


/**
 * Indica si un producto está agotado.
 *
 * @param int $unitats Unidades en stock
 * @return bool true si no queda ninguna unidad
 */
function esgotat(int $unitats): bool
{
    return $unitats === 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 5 · Los tipos y strict_types</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 5 · Los tipos y strict_types</p>
</header>

<main>

    <h2>Ejercicio 1 · area() y esgotat()</h2>

    <p>area(3.0, 4.0) = <?php echo area(3.0, 4.0); ?></p>

    <p>area(3, 4) con enteros = <?php echo area(3, 4); ?></p>

    <p>esgotat(0) = <?php echo esgotat(0) ? 'true' : 'false'; ?></p>
    <p>esgotat(5) = <?php echo esgotat(5) ? 'true' : 'false'; ?></p>


    <h2>Error con strict_types activado</h2>

    <?php
    try {
        echo area('3', 4.0);
    } catch (TypeError $e) {
        echo '<div class="error">Error de tipos: ' . $e->getMessage() . '</div>';
    }
    ?>


    <h2>Arreglado convirtiendo el texto con (float)</h2>

    <p>area((float) '3', 4.0) = <?php echo area((float) '3', 4.0); ?></p>

    <?php
    // Por qué es mejor que PHP avise en lugar de convertir por su cuenta:
    // si PHP convirtiera solo, un dato mal escrito (por ejemplo 'abc' o
    // un texto vacío) se colaría en los cálculos y daría resultados
    // raros sin que nadie se enterase. Con strict_types el error salta
    // en el momento y en la línea exacta, y la conversión la hago yo y
    // se ve en el código.
    ?>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
