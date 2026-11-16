<?php
declare(strict_types=1);

// APARTADO 4 · Valores por defecto


/**
 * Calcula el precio con IVA. El tipo de IVA es opcional (21 % por defecto).
 *
 * @param float $base Precio sin IVA
 * @param float $iva  Tipo de IVA en decimal (0.21 = 21 %)
 * @return float Precio con IVA, redondeado a 2 decimales
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}


/**
 * Aplica un descuento a un precio.
 *
 * @param float $preu        Precio original
 * @param int   $percentatge Porcentaje de descuento (10 por defecto)
 * @return float Precio con el descuento aplicado
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float
{
    return round($preu * (1 - $percentatge / 100), 2);
}


/**
 * Devuelve un mensaje de bienvenida con saludo opcional.
 *
 * @param string $nom       Nombre de la persona
 * @param string $salutacio Saludo (por defecto 'Hola')
 * @return string Mensaje de bienvenida
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return $salutacio . ', ' . $nom . '!';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 4 · Valores por defecto</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 4 · Valores por defecto</p>
</header>

<main>

    <h2>Ejercicio 1 · preuAmbIva()</h2>

    <p>100 con el IVA por defecto (21 %): <?php echo preuAmbIva(100.0); ?></p>
    <p>100 con IVA 0.10: <?php echo preuAmbIva(100.0, 0.10); ?></p>
    <p>100 con IVA 0.04: <?php echo preuAmbIva(100.0, 0.04); ?></p>


    <h2>Ejercicio 2 · aplicaDescompte()</h2>

    <p>200 con el descuento por defecto (10 %): <?php echo aplicaDescompte(200.0); ?></p>
    <p>200 con un descuento del 25 %: <?php echo aplicaDescompte(200.0, 25); ?></p>


    <h2>Ejercicio 3 · benvinguda()</h2>

    <p><?php echo benvinguda('Marta'); ?></p>
    <p><?php echo benvinguda('Jordi', 'Buenos días'); ?></p>

    <?php
    // Prueba con el parámetro opcional puesto el primero. Está comentada
    // para que la página no dé avisos en el log. Para probarla, quita
    // los // de las tres líneas, recarga y mira el log:
    //
    // function benvingudaMal(string $salutacio = 'Hola', string $nom): string
    // {
    //     return $salutacio . ', ' . $nom . '!';
    // }
    //
    // Aviso que da PHP (PHP 8.1 o superior):
    // Deprecated: Optional parameter $salutacio declared before required
    // parameter $nom is implicitly treated as a required parameter
    //
    // Por qué: si el opcional va primero, PHP no sabría qué valor va a
    // qué parámetro al llamar con un solo argumento. Por eso los
    // parámetros con valor por defecto van SIEMPRE al final.
    // La versión buena es la benvinguda() de arriba.
    ?>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
