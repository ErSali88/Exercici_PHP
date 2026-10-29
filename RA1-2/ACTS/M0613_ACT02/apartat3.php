<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3</title>
</head>
<body>

<h1>Apartat 3 - Funcions per tractar arrays</h1>

<?php

$cartell = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');

?>

<h2>Exercici 1: Buscar un grup</h2>

<?php

// Amb in_array (el true fa la comparacio estricta)
if (in_array('Txarango', $cartell, true)) {
    echo '<p>Txarango es al cartell</p>';
} else {
    echo '<p>Txarango no es al cartell</p>';
}

if (in_array('Estopa', $cartell, true)) {
    echo '<p>Estopa es al cartell</p>';
} else {
    echo '<p>Estopa no es al cartell</p>';
}

// Funcio que torna la posicio o -1
function buscaGrup(array $llista, string $grup) {
    foreach ($llista as $posicio => $valor) {
        if ($valor === $grup) {
            return $posicio; // el return surt del bucle
        }
    }
    return -1;
}

echo '<p>Julieta es a la posicio: ' . buscaGrup($cartell, 'Julieta') . '</p>';
echo '<p>Estopa es a la posicio: ' . buscaGrup($cartell, 'Estopa') . '</p>';

?>

<h2>Exercici 2: Les quatre ordenacions</h2>

<?php

$assistents = array(
    'Txarango' => 5100,
    'Mushkaa' => 1850,
    'Oques Grasses' => 4200,
    'Julieta' => 2100,
    'Figa Flawas' => 3600
);

// Quatre copies (les funcions modifiquen l'array que reben)
$copia1 = $assistents;
$copia2 = $assistents;
$copia3 = $assistents;
$copia4 = $assistents;

asort($copia1);
arsort($copia2);
ksort($copia3);
krsort($copia4);

?>

<h3>asort (per valor, de menor a major)</h3>
<pre><?php print_r($copia1); ?></pre>

<h3>arsort (per valor, de major a menor)</h3>
<pre><?php print_r($copia2); ?></pre>

<h3>ksort (per clau, de menor a major)</h3>
<pre><?php print_r($copia3); ?></pre>

<h3>krsort (per clau, de major a menor)</h3>
<pre><?php print_r($copia4); ?></pre>

<?php

/*
    DIFERENCIA asort() / ksort():
    - asort() ordena pel VALOR (aqui, pel nombre d'assistents).
    - ksort() ordena per la CLAU (aqui, pel nom del grup, alfabeticament).
    Les dues mantenen la relacio clau-valor.
*/

?>

<h2>Exercici 3: Barrejar el cartell</h2>

<?php

$barrejat = $assistents;
shuffle($barrejat);

?>

<pre><?php print_r($barrejat); ?></pre>

<?php

/*
    Que ha passat amb els noms dels grups?
    Han desaparegut: shuffle() perd les claus i les renumera 0, 1, 2...
    Nomes queden els valors (els assistents) i ja no se sap de quin grup eren.
*/

// Fet be: els noms dels grups com a valor
$sorteig = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');
shuffle($sorteig);

?>

<h3>Ordre del sorteig</h3>
<ol>
    <?php foreach ($sorteig as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
</ol>

</body>
</html>
