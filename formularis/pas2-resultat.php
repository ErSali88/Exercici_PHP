<?php

/* 

Pas 2 - Recollir les dades correctament.

*/

/* trim: para sacar los espacios y inicializar si la variable venia vacia */
$nom = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia = trim($_POST['dia'] ?? 'sense triar');

echo "<p> Hola, " .$nom. "</p>";

?>