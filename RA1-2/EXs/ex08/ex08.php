<?php

$alumnos = [
    ['nombre' => 'Salis', 'curso' => 'daw', 'edat' => 28, 'nota_media' => 10],
    ['nombre' => 'Ana', 'curso' => 'daw', 'edat' => 22, 'nota_media' => 8],
    ['nombre' => 'Juan', 'curso' => 'daw', 'edat' => 25, 'nota_media' => 7],
    ['nombre' => 'Laura', 'curso' => 'daw', 'edat' => 21, 'nota_media' => 9],
    ['nombre' => 'Carlos', 'curso' => 'daw', 'edat' => 24, 'nota_media' => 6],
    ['nombre' => 'Maria', 'curso' => 'daw', 'edat' => 23, 'nota_media' => 8],
    ['nombre' => 'David', 'curso' => 'daw', 'edat' => 27, 'nota_media' => 7],
    ['nombre' => 'Lucia', 'curso' => 'daw', 'edat' => 20, 'nota_media' => 9],
    ['nombre' => 'Pablo', 'curso' => 'daw', 'edat' => 26, 'nota_media' => 6],
    ['nombre' => 'Marta', 'curso' => 'daw', 'edat' => 22, 'nota_media' => 10],
];

//count — Cuenta todos los elementos de un array o en un objeto Countable | en este caso permite saber cuantos alumnos hay en $alumnos

//in_array — Indica si un valor pertenece a un array | aaaaaa

//array_key_exists — Checks if the given key or index exists in the array
//sort — Ordena un array en orden creciente
//rsort — Ordena un array en orden decreciente
//ksort — Ordena un array según las claves en orden ascendente
//array_sum — Calculate the sum of values in an array
//array_column — Return the values from a single column in the input array
//implode — Join array elements with a string

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alumnos</title>
</head>
<body>

    <header>
        <h1>Alumnos</h1>
    </header>

    <main>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Nota media</th>
            </tr>

            <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td><?= $alumno['nombre'] ?></td>
                    <td><?= $alumno['curso'] ?></td>
                    <td><?= $alumno['edat'] ?></td>
                    <td><?= $alumno['nota_media'] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </main>

</body>
</html>