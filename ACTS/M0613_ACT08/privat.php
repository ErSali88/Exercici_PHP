<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

if (!isset($_SESSION['usuari'])) {
    header('Location: login.php');
    exit;
}

$titolPagina = 'La teva àrea privada';
require 'header.php';
?>
<h2>Hola, <?= htmlspecialchars($_SESSION['nom'], ENT_QUOTES, 'UTF-8') ?></h2>
<p>Has entrat a les <strong><?= htmlspecialchars($_SESSION['entrada'], ENT_QUOTES, 'UTF-8') ?></strong>.</p>
<h3>Dades de la sessió</h3>
<table>
    <?php foreach ($_SESSION as $clau => $valor): ?>
        <tr><th><?= htmlspecialchars((string)$clau, ENT_QUOTES, 'UTF-8') ?></th><td><?= htmlspecialchars((string)$valor, ENT_QUOTES, 'UTF-8') ?></td></tr>
    <?php endforeach; ?>
</table>
<a class="tornar" href="sortir.php">Tancar la sessió</a>
<?php require 'footer.php'; ?>
