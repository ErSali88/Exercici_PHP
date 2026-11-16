<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartat 2</title>
</head>
<body>

<h1>Apartat 2 - Recorrer arrays</h1>

<?php

$grups = array('Txarango', 'Mushkaa', 'Oques Grasses', 'Julieta', 'Figa Flawas');

$estils = array(
    'Txarango' => 'Mestissatge',
    'Mushkaa' => 'Pop urba',
    'Oques Grasses' => 'Pop rock',
    'Julieta' => 'Pop',
    'Figa Flawas' => 'Rumba'
);

?>

<h2>Exercici 1: Foreach basic</h2>

<h3>Versio 1</h3>
<ul>
    <?php foreach ($grups as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<h3>Versio 2: amb la posicio</h3>
<ul>
    <?php foreach ($grups as $posicio => $grup): ?>
        <li>Posicio <?= $posicio ?>: <?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<h2>Exercici 2: Foreach sobre un associatiu</h2>

<table border="1">
    <tr>
        <th>Grup</th>
        <th>Estil</th>
    </tr>
    <?php foreach ($estils as $grup => $estil): ?>
        <tr>
            <td><?= $grup ?></td>
            <td><?= $estil ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td>Total de grups</td>
        <td><?= count($estils) ?></td>
    </tr>
</table>

<h2>Exercici 3: El mateix sense foreach</h2>

<table border="1">
    <tr>
        <th>Grup</th>
        <th>Estil</th>
    </tr>
    <?php reset($estils); ?>
    <?php do { ?>
        <tr>
            <td><?= key($estils) ?></td>
            <td><?= current($estils) ?></td>
        </tr>
    <?php } while (next($estils)); ?>
    <tr>
        <td>Total de grups</td>
        <td><?= count($estils) ?></td>
    </tr>
</table>

<?php

/*
    La sortida es identica a la de l'exercici 2.

    veo mas claro un foreach: porque es mas corto i es mas facil de acordar con do while hay mas codigo 
*/

?>

<h2>Exercici 4: A l'inreves, dins d'una funcio</h2>

<?php

function recorrerInvers(array $llista) {
    end($llista); // aqui es la ultima casilla
    do {
        $grup = key($llista);
        $estil = current($llista);
        echo "$grup: $estil<br>";
    } while (prev($llista)); // retrocedim; a la primera, prev() torna false
}

recorrerInvers($estils);

?>

<h3>L'array original despres de cridar la funcio</h3>
<ul>
    <?php foreach ($estils as $grup => $estil): ?>
        <li><?= $grup ?>: <?= $estil ?></li>
    <?php endforeach; ?>
</ul>

<?php

/*
    El array original no se ha movido en ningun momento, porque la funcion recibe una copia.
    El puntero que se movio en la funcion es la copia
*/

?>

</body>
</html>
