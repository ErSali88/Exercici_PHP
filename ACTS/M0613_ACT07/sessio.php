<?php

// Esta línea tiene que ser la PRIMERA de todas, siempre
session_start();



$_SESSION['visites'] = ($_SESSION['visites'] ?? 0) + 1;



echo 'Visites: ' . $_SESSION['visites'] . '<br>';
echo 'ID de sessio: ' . session_id() . '<br>';
echo 'Carpeta de sessions: ' . session_save_path();
