<?php

require_once 'config.php';
require_once 'funcions.php';



// 1. Si entran directamente a esta página, sin pasar por el formulario
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    $titolPagina = 'Acces directe';

    require 'header.php';

    echo '<h2>Aqui no s\'hi arriba directament</h2>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';

    require 'footer.php';

    exit;
}



// 2. Recoger los datos y guardarlos en el array asociativo
$clau  = camp('clau');
$clau2 = camp('clau2');

$condicions = isset($_POST['condicions']);

if (isset($_POST['butlleti'])) {
    $butlleti = 'Sí';
} else {
    $butlleti = 'No';
}

$usuari = [
    'nom'       => camp('nom'),
    'cognoms'   => camp('cognoms'),
    'correu'    => camp('correu'),
    'usuari'    => camp('usuari'),
    'naixement' => camp('naixement'),
    'adreca'    => camp('adreca'),
    'cp'        => camp('cp'),
    'poblacio'  => camp('poblacio'),
    'telefon'   => camp('telefon'),
    'origen'    => camp('origen', 'no ho ha dit'),
    'butlleti'  => $butlleti
];



// 3. Validar y llenar el array de errores
$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}

if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}

if (!validaCorreu($usuari['correu'])) {
    $errors[] = 'El correu electrònic no és correcte.';
}

if (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim ' . MIN_USUARI . ' caràcters.';
}

if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir com a mínim ' . MIN_CLAU . ' caràcters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

if ($usuari['naixement'] === '') {
    $errors[] = 'La data de naixement és obligatòria.';
}

if (!validaCodiPostal($usuari['cp'])) {
    $errors[] = 'El codi postal ha de tenir 5 xifres.';
}

if (!$condicions) {
    $errors[] = 'Has d\'acceptar les condicions d\'ús.';
}



// 4. Calcular el título ANTES de incluir la cabecera
if (count($errors) > 0) {
    $titolPagina = 'No s\'ha creat el compte';
} else {
    $titolPagina = 'Compte creat';
}

require 'header.php';

?>

    <?php if (count($errors) > 0): ?>

        <h2>No s'ha creat el compte</h2>

        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <a class="tornar" href="<?= PAG_FORMULARI ?>">Tornar al formulari</a>

    <?php else: ?>

        <h2>Compte creat</h2>

        <table>
            <?php foreach ($usuari as $clauCamp => $valor): ?>
                <tr>
                    <th><?= etiqueta($clauCamp) ?></th>
                    <td><?= htmlspecialchars($valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a class="tornar" href="gracies.php">Continuar</a>

    <?php endif; ?>

<?php

require 'footer.php';
