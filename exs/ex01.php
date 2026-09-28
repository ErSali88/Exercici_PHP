<?php

echo 'Hola';
echo 'Hola', ' ', 'mon';
echo '<p>Text</php>';

print 'Hola'; //Retorna 1
var_dump($x); //Per depurar
print_r($dades); //Llegible

/* 

Compte echo escriu HTML

Si escrius <b>, el navegador ho interpretara com a negreta

Els ssalts de linia \n nomes ordenen el codi font, no la pagina

Per separar visualment cal <br> o <p>

*/

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat'; //Es pot canviar
$total = $edat + 1;

echo $nom;

/* Sempre amb $         $nom, no nom */
/* Primer caracter      Lletra o_; mal un numero */
/* Distingeix           $nom i $Nom son variables diferents */
/* Sense declarar       No cal dir de quin tipus es: PHP ho dedueix */

$x = 5; //int
$x = 'eine'; //ara string

$a = '10' + 5; //15 (int)
$b = '10' . 5; //'105' (string)

var_dump($a, $b);

/* 

Perque importa

tot el que arriba d'un formulari es text, encara que sembli un numero

PHP converteix sol quan pot, i no sempre com esperes

Si el resultat et sorpren fes var dump

*/

$nom = 'Aina';
echo 'Hola $nom'; //Hola $nom

$nom = 'Aina';
echo "Hola $nom"; //Hola Aina

$nom = 'Aina'; $punts = 8;

echo 'Hola'. $nom . ', tens ' . $punts . 'punts'; //concatenacio amb .
echo "Hola $nom, tens $punts punts";
echo "Hola ($nom), tens ($punts) punts";

/* El punt uneix */
/* Les claus aclareixen */
/* Compte amb els espais */

define('IVA', 0.21);
const BOTIGA = 'Ca la web';

echo BOTIGA; //sense 3
%total = $base * (1 + IVA);

//IVA = 0.10; -> error fatal

$missatge = 'Hola'; //ambit global

function saluda(){
    echo $missatge; //no la veu!!!!!!
    $intern = 'Adeu'; //ambit local
}

saluda();
echo $intern; //Tampoc la veu

/* 

Global: Fora de qualsevol funcio. No entra sola dins les funcions

Local   Nascuda dins d'una funcio. Mor quan la funcio acaba

Static  Local, pero recorda el valor entre crides

Parametre La manera enta de passar informacio a una funcio (RA3)


*/


/* DIRECTIVAS

declare(strick_type=1);     Primera linia del fitxer, PHP deixa de convertir tipus pel seu compte.

int_set('display_errors', '1');     Canvia un parametre nomes per a aquest peticio

error_reporting(E_ALL);     Decideix quins nivells d'error es tenen en compte ara mateix

setiocale() 'data_default_timesone_set()        Idioma i zona horaria per aquest script

*/