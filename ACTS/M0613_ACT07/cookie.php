<?php

// Pedimos al navegador que se guarde la hora, durante una hora
// Usamos variables con camelCase; más adelante, con las BBDD, usaremos guion bajo

setcookie('ultimaVisita', date('H:i:s'), time() + 3600);



// Si existe la cookie ultimaVisita
if (isset($_COOKIE['ultimaVisita'])) {

    echo 'Hi eres a les ' . $_COOKIE['ultimaVisita'];

} else {

    echo 'Encara no hi ha cap cookie.';

}
