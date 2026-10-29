<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1</title>
</head>
<body>

<h1>Apartat 1 - Crear arrays</h1>

<?php

/* ---------- EXERCICI 1: Les tres maneres ---------- */

// 1. Assignacio directa
$grups[0] = 'Txarango';
$grups[] = 'Mushkaa';        // posicio 1
$grups[] = 'Oques Grasses';  // posicio 2
$grups[8] = 'Julieta';       // salta a la posicio 8
$grups[] = 'Figa Flawas';    // va a la 9, no a la 3

// 2. Amb array() i range()
$estils = array('Mestissatge', 'Pop urba', 'Rumba');
$edicions = range(2019, 2026);

// 3. Amb una funcio que retorna un array
$paraules = explode(' ', 'El festival torna aquest estiu');

?>

<h2>Exercici 1</h2>

<!-- <pre> respecta els espais i els salts de linia, aixi print_r es veu ben ordenat -->
<h3>$grups</h3>
<pre><?php print_r($grups); ?></pre>

<h3>$estils</h3>
<pre><?php print_r($estils); ?></pre>

<h3>$edicions</h3>
<pre><?php print_r($edicions); ?></pre>

<h3>$paraules</h3>
<pre><?php print_r($paraules); ?></pre>

<h3>print_r</h3>
<pre><?php print_r($estils); ?></pre>

<h3>var_dump</h3>
<pre><?php var_dump($estils); ?></pre>

<h3>var_export</h3>
<pre><?php var_export($estils); ?></pre>

<?php

/*
    DIFERENCIA:
    - print_r: mostra el contingut de forma llegible, res mes.
    - var_dump: mostra el contingut amb el tipus (string) i la mida (int) de cada valor.
    - var_export: mostra el codi PHP que serveix per tornar a crear l'array.

    PER QUE EL GRUP SEGUENT NO VA A LA POSICIO 2?
    Perque PHP posa el nou element a l'index mes gran que hi ha + 1.
    Com que l'index mes gran era el 8, el seguent va a la 9.
*/

/* ---------- EXERCICI 2: L'array associatiu ---------- */

// Dos amb assignacio directa
$estils = array(); // torno a crear $estils, ara associatiu
$estils['Txarango'] = 'Mestissatge';
$estils['Mushkaa'] = 'Pop urba';

// Dos amb array() (els afegeixo amb un altre array)
$mes = array('Julieta' => 'Pop', 'Figa Flawas' => 'Rumba');
$estils = $estils + $mes;

?>

<h2>Exercici 2</h2>

<p>L'estil de Txarango es: <?= $estils['Txarango'] ?></p>

<?php

// Afegim un grup nou
$estils['Oques Grasses'] = 'Pop rock';

?>

<pre><?php print_r($estils); ?></pre>

<p>Hi ha <?= count($estils) ?> grups.</p>

<?php

/* ---------- EXERCICI 3: Esborrar una casella ---------- */

$cartell = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');

?>

<h2>Exercici 3</h2>

<h3>Abans d'esborrar</h3>
<pre><?php print_r($cartell); ?></pre>
<p>count: <?= count($cartell) ?></p>

<?php

// Esborrem el tercer grup (posicio 2)
unset($cartell[2]);

?>

<h3>Despres d'esborrar</h3>
<pre><?php print_r($cartell); ?></pre>
<p>count: <?= count($cartell) ?></p>

<?php

// Afegim un grup nou
$cartell[] = 'La Ludwig Band';

?>

<h3>Despres d'afegir un grup nou</h3>
<pre><?php print_r($cartell); ?></pre>

<?php

/*
    El grup nou ha anat a la posicio 5 (no a la 2).
    PHP no reutilitza el forat: agafa l'index mes gran (4) + 1.

    PER QUE UN for DE 0 A count()-1 POT FALLAR?
    Despres de l'unset els index son 0, 1, 3, 4, 5, pero count() diu 5.
    El for recorre del 0 al 4: quan arriba al 2 no existeix (error "Undefined array key")
    i l'index 5 no el visita mai.
    Per aixo amb arrays amb forats s'ha d'usar foreach.
*/

?>

</body>
</html>
