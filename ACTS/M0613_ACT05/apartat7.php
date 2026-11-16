<?php
declare(strict_types=1);

// APARTADO 7 · Funciones que trabajan con arrays

$productes = [
    ['nom' => 'Teclat mecanic RGB',    'categoria' => 'teclats',
     'preu' => 79.90,  'estoc' => 4],

    ['nom' => 'Ratoli vertical',       'categoria' => 'ratolins',
     'preu' => 29.95,  'estoc' => 7],

    ['nom' => 'Monitor 27" QHD',       'categoria' => 'monitors',
     'preu' => 289.00, 'estoc' => 0],

    ['nom' => 'Auriculars ANC',        'categoria' => 'audio',
     'preu' => 129.00, 'estoc' => 2],

    ['nom' => 'Hub USB-C 7 en 1',      'categoria' => 'accessoris',
     'preu' => 34.90,  'estoc' => 20],

    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris',
     'preu' => 24.50,  'estoc' => 0],
];


// ---------- Ejercicio 1: funciones que devuelven un valor ----------

/**
 * Suma de precio por unidades de todos los productos.
 *
 * @param array $productes Catálogo de productos
 * @return float Valor total del stock
 */
function valorEstoc(array $productes): float
{
    $total = 0.0;

    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }

    return round($total, 2);
}


/**
 * Cuenta los productos que tienen el stock a cero.
 *
 * @param array $productes Catálogo de productos
 * @return int Número de productos agotados
 */
function quantsEsgotats(array $productes): int
{
    $comptador = 0;

    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $comptador++;
        }
    }

    return $comptador;
}


/**
 * Calcula el precio medio. Si el array está vacío devuelve 0.
 *
 * @param array $productes Catálogo de productos
 * @return float Precio medio con dos decimales
 */
function preuMitja(array $productes): float
{
    if (count($productes) === 0) {
        return 0.0;
    }

    $suma = 0.0;

    foreach ($productes as $item) {
        $suma += $item['preu'];
    }

    return round($suma / count($productes), 2);
}


// ---------- Ejercicio 2: funciones que devuelven un array ----------

/**
 * Devuelve solo los productos que tienen stock.
 *
 * @param array $productes Catálogo de productos
 * @return array Productos con stock mayor que cero
 */
function nomesDisponibles(array $productes): array
{
    $res = [];

    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $res[] = $item;
        }
    }

    return $res;
}


/**
 * Devuelve el producto entero con el precio más alto.
 *
 * @param array $productes Catálogo de productos
 * @return array Producto más caro (array vacío si no hay productos)
 */
function elMesCar(array $productes): array
{
    $mesCar = [];

    foreach ($productes as $item) {
        if (count($mesCar) === 0 || $item['preu'] > $mesCar['preu']) {
            $mesCar = $item;
        }
    }

    return $mesCar;
}


/**
 * Resumen del catálogo en un array asociativo.
 *
 * @param array $productes Catálogo de productos
 * @return array Claves: total, disponibles y mes_car (nombre del más caro)
 */
function resumCataleg(array $productes): array
{
    $mesCar = elMesCar($productes);

    return [
        'total'       => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car'     => $mesCar['nom'] ?? 'ninguno',
    ];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartado 7 · Funciones con arrays</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Apartado 7 · Funciones que trabajan con arrays</p>
</header>

<main>

    <h2>Ejercicio 1 · funciones que devuelven un valor</h2>

    <p>Valor del stock: <?php echo valorEstoc($productes); ?> EUR</p>
    <p>Productos agotados: <?php echo quantsEsgotats($productes); ?></p>
    <p>Precio medio: <?php echo preuMitja($productes); ?> EUR</p>
    <p>Precio medio con un array vacío []: <?php echo preuMitja([]); ?></p>


    <h2>Ejercicio 2 · funciones que devuelven un array</h2>

    <h3>Solo los disponibles</h3>

    <ul>
        <?php foreach (nomesDisponibles($productes) as $item) { ?>
            <li><?php echo htmlspecialchars($item['nom']); ?> (<?php echo $item['estoc']; ?> uds)</li>
        <?php } ?>
    </ul>

    <?php $mesCar = elMesCar($productes); ?>

    <h3>El más caro</h3>

    <p><?php echo htmlspecialchars($mesCar['nom']); ?> · <?php echo $mesCar['preu']; ?> EUR</p>

    <h3>Resumen del catálogo</h3>

    <ul>
        <?php foreach (resumCataleg($productes) as $clau => $valor) { ?>
            <li><?php echo $clau; ?>: <?php echo htmlspecialchars((string) $valor); ?></li>
        <?php } ?>
    </ul>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
