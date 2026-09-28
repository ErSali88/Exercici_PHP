<?php

//DECIDIR: IF, ELSEIF, ELSE

$nota = 7.5;

if($nota >= 9){
    $qualif = 'Excelent';
}elseif($nota >= 7){
    $qualif = 'Notable';
}elseif($nota >= 5){
    $qualif = 'Aprovat';
}else{
    $qualif = 'Suspes';
}

//La sintaxi alternativa, dins de l'html

?>

<!-- Amb clau: es perd el fil -->
<?php if($estoc > 0) { ?>
    <p>En estoc</p>
<?php } else { ?>
    <p>Esgotat</p>
<?php } ?>

<!-- Amb dos punts: es llegeix sol -->
<?php if ($estoc > 0): ?>
    <p>En estoc</p>
<?php else: ?>
    <p>Esgotat</p>
<?php endif; ?>

<?php

// if (...); ... endif;     foreach (...); ... endforeach; 
// for (...); endfor;       while (...); ... endwhile;

//Moltes opcions: switch i match

//Switch classic

switch($zona){
    case 'local':
        $enviament = 0;
    break;

    case 'peninsula':
        $enviament = 4.95;
    break;

    default:
        $enviament = 9.95;
    break;
}

//MATCH Switch PHP 8

$enviament = match ($zona){
    'local' => 0,
    'peninsula' => 4.95,
    default => 9.95,
};

//Repetir: tres bucles, tres usos

//for

for($i = 1; $i <= 10; $i++){
    echo $i;
}

//while

while($saldo < $objeto){
    $saldo *= 1.03;
    $anya++;
}

//Do While

do{
    $n = rand(1, 6);
}while ($n !== 6);


//TABLA MULTIPLICACION FOR

?>

<table>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td><?= $i ?> x 7</td>
            <td><?= $i * 7 ?></td>
        </tr>
    <?php endfor; ?>
</table>

<?php

//ARRAYS indexats

$colors = ['vermell', 'verd', 'blau'];

echo $colors[0]; //vermell
echo count($colors); //3

$colors[] = 'groc'; //afegeix al final

print_r($colors);

//ARRAYS associatius

$producte = [
    'nom' => 'teclat mecanic',
    'preu' => 79.90,
    'estoc' => 4,
]; 

echo $producte['nom'];
$producte['preu'] = 69.90;

//FOREACH: recorrer el array

//Nomes els valors

foreach($colors as $color){
    echo "<li> $color </li>";
}

//Clau i valor alhora

foreach ($producte as $clau => $valor){
    echo "<dt> $clau </dt>";
    echo "<dd> $valor </dd>";
}

//RECORRER ARRAY POR FOREACH


/* ************************************************************
 *              FUNCIONS PER TREBALLAR AMB ARRAYS
 * ************************************************************
 *
 *  FUNCIÓ                              QUÈ FA
 *  ------------------------------------------------------------
 *
 *  count($a)                           Quants elements té
 *
 *  in_array($x, $a, true)              Si un valor hi és
 *                                      (el true fa la comparació
 *                                      estricta)
 *
 *  array_key_exists('k', $a)           Si una clau existeix
 *
 *  sort / rsort / ksort                Ordena per valor o per clau
 *
 *  array_sum / max / min               Suma, Màxim i Mínim
 *
 *  array_column($a, 'preu')             Treu una columna
 *                                      d'una array d'arrays
 *
 *  implode(', ', $a) / explode        Array a text i text a array
 *
 * ************************************************************ */


//PHP
$productes = [
    ['nom' => 'Teclat', 'preu' => 79.9],
    ['nom' => 'Ratoli', 'preu' => 24.5],
    ['nom' => 'Monitor', 'preu' => 189],
];

//HTML
<table>
    <?php foreach ($productes as $p): ?>
        <tr>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['preu'] ?> EUR</td>
        </tr>
    <?php endforeach; ?>
</table>

