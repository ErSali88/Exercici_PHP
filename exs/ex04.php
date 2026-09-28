<?php
/* 

Aquest fitxer te 6 errors: 3 de sintaxi (PHP no arrenca)
i 3 de logica (funciona, pero el resultat no es correcte)

Arreglalos d'un en un. comprovant la pagina despres de cada canvi

Anota a error-trobats.md quin era, com te n'has adonat i com l'has resolt

*/

/*
nom = 'Aina';
$assinatura = 'Desenvolupament WEB' ";"

$nota1 = 7;
$nota2 = 9;
$mitjana = $nota1 + $nota2 / 2;

echo '<h1> Bulleti de notes </h1>';
echo '<p> Alumna: $nom </p>';
echo '<p> Assignatura: ' + $assinatura + ' </p>';
echo "<p> Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date(d/m/y) . '</p>'
*/

/************************************************************/

$nom = 'Aina'; /* FALTA "$" */
$assinatura = 'Desenvolupament WEB'; /* FALTA PUNT I COMA */

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2; /* nota1, nota2 entre | ($mitjana = ($nota1 + $nota2) / 2;) */

echo '<h1>Butlletí de notes</h1>';
echo '<p>Alumna: ' . $nom . '</p>'; /* mostrara: '<p> Alumna: $nom </p>' seria | (echo '<p>Alumna: ' . $nom . '</p>';) */
echo '<p>Assignatura: ' . $assinatura . '</p>'; /* PHP no se usa "+" se usa "." */
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/y') . '</p>';

?>

