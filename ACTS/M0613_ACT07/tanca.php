<?php

session_start();



$_SESSION = [];        // vaciamos los datos
session_destroy();     // destruimos la sesión en el servidor



echo 'Sessió tancada. <a href="sessio.php">Torna al comptador</a>';
