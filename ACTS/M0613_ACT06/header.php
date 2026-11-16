<?php

// Si una página se olvida del título, no queremos un aviso en pantalla.
if (!isset($titolPagina)) {
    $titolPagina = 'Inici';
}

?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($titolPagina) ?> · <?= BOTIGA_NOM ?></title>
    <link rel="stylesheet" href="<?= FULL_ESTILS ?>">
</head>

<body>

    <header>
        <h1><?= BOTIGA_NOM ?></h1>
        <p><?= BOTIGA_LEMA ?></p>
    </header>

    <main>
