<?php

/* 

APARTAT 3 - Comprovar que s'arriba des del formulari

Si algu escriu l'adreça de processa.php directament, no hi ha dades (GET)

*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="registre.html">Torna-hi</a></p>';
    exit;

}


/* 

APARTAT 4 - Totes les dades en un sol array associatiu

?? dona un valor per defecte si el camp no ha arribat
trim treu els espais del davant i del darrere
isset es per a les caselles, que si no es marquen no s'envien

*/

$usuari = [

    'nom'        => trim($_POST['nom'] ?? ''),
    'cognoms'    => trim($_POST['cognoms'] ?? ''),
    'naixement'  => trim($_POST['naixement'] ?? ''),
    'telefon'    => trim($_POST['telefon'] ?? ''),
    'correu'     => trim($_POST['correu'] ?? ''),
    'usuari'     => trim($_POST['usuari'] ?? ''),
    'carrer'     => trim($_POST['carrer'] ?? ''),
    'poblacio'   => trim($_POST['poblacio'] ?? ''),
    'codipostal' => trim($_POST['codipostal'] ?? ''),
    'tipus'      => trim($_POST['tipus'] ?? ''),
    'origen'     => trim($_POST['origen'] ?? ''),
    'butlleti'   => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',

];

// Les contrasenyes NO van dins de l'array, es recullen a part
$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';


/* 

APARTAT 5 - Validar les dades

Cada error s'afegeix a l'array $errors
Si al final l'array esta buit, tot ha anat be

*/

$errors = [];

// Nom
if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}

// Cognoms
if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}

// Correu
if ($usuari['correu'] === '') {
    $errors[] = 'El correu és obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no té un format valid.';
}

// Nom d'usuari: minim 4 caracters
if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim 4 caràcters.';
}

// Contrasenya: minim 6 caracters
if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir com a mínim 6 caràcters.';
}

// Les dues contrasenyes han de ser iguals
if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

// Codi postal: nomes si s'ha omplert, exactament 5 xifres
if ($usuari['codipostal'] !== '' && strlen($usuari['codipostal']) !== 5) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

// Tipus de client: n'ha de triar un
if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
}

// Condicions: ha de marcar la casella
if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}

?>

<!DOCTYPE html>
<html lang="ca">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat del registre</title>

    <!-- Enllacem el full d'estils tambe aqui -->
    <link rel="stylesheet" href="estils.css">

</head>
<body>

<?php if (count($errors) > 0): ?>

    <h2>No s'ha pogut crear el compte</h2>

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>

    <p><a href="registre.html">Torna al formulari</a></p>

<?php else: ?>

    <!-- APARTAT 6 - Resum -->

    <h1>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h1>

    <p>T'hem enviat la confirmació a <?= htmlspecialchars($usuari['correu']) ?></p>

    <table>
        <?php foreach ($usuari as $camp => $valor): ?>
            <tr>
                <th><?= $camp ?></th>
                <td><?= htmlspecialchars($valor) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>

</body>
</html>
