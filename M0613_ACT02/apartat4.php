<!DOCTYPE html>
<html lang="se">
<head>
    <meta charset="UTF-8">
    <title>Apartat 4</title>
</head>
<body>

<h1>Apartat 4 - Arrays multidimensionals</h1>

<?php

$concerts = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

?>

<h2>Exercici 1: Els concerts</h2>

<table border="1">

    <tr>
        <th>Nom</th>
        <th>Escenari</th>
        <th>Hora</th>
        <th>Assistents</th>
        <th>Preu</th>
    </tr>

    <?php foreach ($concerts as $c): ?>

        <tr>
            <td><?= $c['nom'] ?></td>
            <td><?= $c['escenari'] ?></td>
            <td><?= $c['hora'] ?></td>
            <td><?= $c['assistents'] ?></td>
            <td><?= number_format($c['preu'], 2, ',', '.') ?> EUR</td>
        </tr>

    <?php endforeach; ?>

</table>

<!-- Primer la posicio (2 = tercer concert), despres el camp -->
<p>El tercer concert es: <?= $concerts[2]['nom'] ?></p>

<?php

$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta'   => 'sí',
        'ubicacio'  => 'Pavelló',
    ],
];

?>

<h2>Exercici 2: Els escenaris</h2>

<p>La capacitat de l'escenari Gran es: <?= $escenaris['Gran']['capacitat'] ?></p>

<?php foreach ($escenaris as $escenari => $dades): ?>

    <h3>Escenari <?= $escenari ?></h3>

    <ul>
        <?php foreach ($dades as $camp => $valor): ?>
            <li><?= $camp ?>: <?= $valor ?></li>
        <?php endforeach; ?>
    </ul>

<?php endforeach; ?>

<!-- $dades es un array entero y hay que hacer un segundo  foreach para abrirlo -->

</body>
</html>
