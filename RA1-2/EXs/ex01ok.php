<?php

echo 'Hola', ' ', 'mon';
echo '<p>Text</p>';

print 'Hola ';

// Creamos una variable
$x = "Salis";

// Mostramos la variable
var_dump($x);

// Mostramos la variable
//print_r($dades);

?>

<?php 

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = ' <br> <br> <br> Bernat <br> <br> <br>'; //Es pot canviar
$total = $edat + 1;

echo $nom;

?>

<?php 

$x = 5; //int
$x = 'eine'; //ara string

$a = '10' + 5; //15 (int)
$b = '10' . 5; //'105' (string)

var_dump($a, $b);

?>

<?php 

$nom = 'Aina';
echo 'Hola $nom'; //Hola $nom

$nom = 'Aina';
echo "Hola $nom"; //Hola Aina

$nom = 'Aina'; $punts = 8;

echo '<br> <br> <br> Hola '. $nom . ', tens ' . $punts . ' punts'; //concatenacio amb .
echo " <br> <br> Hola $nom , tens $punts  punts";
echo " <br> <br> Hola ($nom), tens ($punts) punts";

?>