<?php

const JUEGO = 'Peru City';
const VIDA_MAX = 100; 
const EXP_NIVEL = 1000; // exp que vale cada nivel
const FUERZA_MAX = 50; 
const UMBRAL_HERIDO = 30; // % de vida de herido

$nombre = 'Osito Peru';
$clase = 'Guerrero'; 
$nivel = 7; // nivel actual
$vidaAct = 90; // vida actual
$fuerzaAct = 38; // fuerza actual
$exp = 6450; // experiencia acumulada
$atkBase = 12; // ataque base

$pctVida = $vidaAct / VIDA_MAX * 100; // % de vida 
$pctFuerza = $fuerzaAct / FUERZA_MAX * 100; // % de fuerza 

$expNecesaria = $nivel * EXP_NIVEL; // exp que hace falta para el nivel actual
$expFalta = $expNecesaria - $exp; // exp que falta para subir de nivel

$poderAtk = $atkBase + $nivel * 2; // el poder de ataque suma mas el nivel

$estados = ['Bien', 'Herido']; // posibles estados del personaje
$estaHerido = $pctVida < UMBRAL_HERIDO; // comparación: da 0 o 1
$estado = $estados[$estaHerido]; // se usa el 0/1 como índice, sin if

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de personaje</title>
    <style>

        body { 
            text-align: center;
            font-family: sans-serif; 
            background: grey; 
            color: white; 
            padding: 2rem; 
        }
 
        .ficha {
            margin: 0 auto;
            background: white; 
            color: black; 
            border-radius: 12px; 
            padding: 2rem 2rem; 
            max-width: 420px; 
        }
 
        .barra { 
            background: #E1E8E8; 
            border-radius: 99px; 
            height: 14px; 
            overflow: hidden; 
            margin-bottom: 1rem; 
        } 
 
        .barra span { 
            display: block; 
            height: 100%; 
            border-radius: 99px; 
        } 
 
        .barra .vida { 
            background: #02736F; 
        }
 
        .barra .fuerza { 
            background: #C2661F; 
        } 
 
        .fila { 
            display: flex; 
            justify-content: space-between; 
            margin-bottom: 0.5rem; 
        } 

    </style>
</head>
<body>

    <h1> <?= JUEGO ?> </h1>
    <p>Ficha de personaje</p>

    <div class="ficha"> 

        <h2> <?php echo "$nombre"; ?> </h2>
        <p> <?php echo strtoupper($clase) . ' · NIVEL ' . $nivel; ?> </p>

        <div class="fila"> <span>Vida</span> <span> <?= $vidaAct ?> / <?= VIDA_MAX ?> <?= $pctVida ?>% </span> </div>
        <div class="barra"> <span class="vida" style="width: <?= $pctVida ?>%"> </span> </div>

        <div class="fila"> <span>Fuerza</span > <span> <?= $fuerzaAct ?> / <?= FUERZA_MAX ?> (<?= $pctFuerza ?>%) </span> </div> 
        <div class="barra"> <span class="fuerza" style="width: <?= $pctFuerza ?>%"> </span> </div> 

        <div class="fila"> <span> Poder de ataque </span> <span> <?= $poderAtk ?> </span> </div> 
        <div class="fila"> <span> Experiencia </span> <span> <?= $exp ?> / <?= $expNecesaria ?> </span> </div> 
        <div class="fila"> <span> Le faltan </span ><span> <?= $expFalta ?> puntos para subir de nivel </span> </div>

        <p><strong><?= $estado ?></strong></p> 

    </div> 

</body>
</html>