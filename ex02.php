<?php
// Declaramos una constante IVA (no cambia de valor)
const IVA = 0.21;

$producte = 'Teclat';
$base = 70.90;
$estoc = 4;

$nom = 'Salis';
$cognom = 'Alvarez';
$direccio = 'Peru';

// Funció predefinida per arrodonir
$total = round($base * (1 + IVA), 2);
?>

<h2><?= $producte ?></h2>
<p>Preu amb IVA: <?= $total ?> EUR</p>
<p>Disponibilitat: <?= $estoc ?></p>

<h2>Dades Personals</h2>

<p><?= $nom ?></p>
<p>Cognom: <?= $cognom ?></p>
<p>Direcció: <?= $direccio ?></p>