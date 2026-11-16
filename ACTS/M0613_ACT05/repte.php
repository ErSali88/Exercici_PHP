<?php
declare(strict_types=1);

// REPTE FINAL · El catálogo de BitBazar

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


/**
 * Calcula el precio con IVA. El tipo de IVA es opcional (21 %).
 *
 * @param float $base Precio sin IVA
 * @param float $iva  Tipo de IVA en decimal
 * @return float Precio con IVA, redondeado a 2 decimales
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}


/**
 * Da formato a un precio al estilo catalán: 1.234,50 EUR.
 *
 * @param float $preu Precio a formatear
 * @return string Precio formateado
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}


/**
 * Indica el estado del stock de un producto.
 *
 * @param int $estoc Unidades en stock
 * @return string 'Esgotat', 'Últimes unitats' o 'Disponible'
 */
function estatEstoc(int $estoc): string
{
    if ($estoc === 0) {
        return 'Esgotat';
    }

    if ($estoc <= 3) {
        return 'Últimes unitats';
    }

    return 'Disponible';
}


/**
 * Devuelve los productos de una categoría. Con 'totes' devuelve todo.
 *
 * @param array  $productes Catálogo de productos
 * @param string $categoria Categoría buscada, o 'totes'
 * @return array Productos de esa categoría (vacío si no existe)
 */
function filtraCategoria(array $productes, string $categoria): array
{
    if ($categoria === 'totes') {
        return $productes;
    }

    $res = [];

    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $res[] = $item;
        }
    }

    return $res;
}


/**
 * Resumen del catálogo: total, disponibles, agotados y valor del stock.
 * Usa estatEstoc() para decidir qué es "agotado", así la regla
 * está escrita en un solo sitio.
 *
 * @param array $productes Catálogo de productos
 * @return array Claves: total, disponibles, esgotats y valor_estoc
 */
function resumCataleg(array $productes): array
{
    $esgotats = 0;
    $valor    = 0.0;

    foreach ($productes as $item) {
        if (estatEstoc($item['estoc']) === 'Esgotat') {
            $esgotats++;
        }

        $valor += $item['preu'] * $item['estoc'];
    }

    return [
        'total'       => count($productes),
        'disponibles' => count($productes) - $esgotats,
        'esgotats'    => $esgotats,
        'valor_estoc' => formatPreu($valor),
    ];
}


/**
 * Escribe el HTML de la tarjeta de un producto.
 * Usa preuAmbIva() y formatPreu() para el precio.
 *
 * @param array $producte Un producto del catálogo
 * @return void Solo escribe por pantalla
 */
function pintaTargeta(array $producte): void
{
    $estat = estatEstoc($producte['estoc']);

    // Clase CSS según el estado (sin tildes ni espacios)
    $classe = 'disponible';

    if ($estat === 'Esgotat') {
        $classe = 'esgotat';
    } elseif ($estat === 'Últimes unitats') {
        $classe = 'ultimes';
    }

    echo '<div class="targeta">';
    echo '<h3>' . htmlspecialchars($producte['nom']) . '</h3>';
    echo '<p>Categoría: ' . htmlspecialchars($producte['categoria']) . '</p>';
    echo '<p>' . formatPreu(preuAmbIva($producte['preu'])) . ' (IVA incluido)</p>';
    echo '<p class="estat ' . $classe . '">' . $estat . '</p>';
    echo '</div>';
}


/**
 * Escribe la rejilla entera llamando a pintaTargeta() por cada producto.
 * Si no hay productos, muestra un mensaje en vez de una rejilla vacía.
 *
 * @param array $productes Productos a pintar
 * @return void Solo escribe por pantalla
 */
function pintaGraella(array $productes): void
{
    if (count($productes) === 0) {
        echo '<div class="missatge">No hay productos en esta categoría.</div>';

        return;
    }

    echo '<div class="graella">';

    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }

    echo '</div>';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Repte final · El catálogo de BitBazar</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<header>
    <h1>BitBazar</h1>
    <p>Repte final · El catálogo</p>
</header>

<main>

    <h2>Resumen del catálogo</h2>

    <ul>
        <?php foreach (resumCataleg($productes) as $clau => $valor) { ?>
            <li><?php echo $clau; ?>: <?php echo $valor; ?></li>
        <?php } ?>
    </ul>


    <h2>Todos los productos</h2>

    <?php pintaGraella($productes); ?>


    <h2>Solo la categoría «accessoris»</h2>

    <?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>


    <h2>Una categoría que no existe («jocs»)</h2>

    <?php pintaGraella(filtraCategoria($productes, 'jocs')); ?>

</main>

<footer>BitBazar · <?php echo date('Y'); ?></footer>

</body>
</html>
