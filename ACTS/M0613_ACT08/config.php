<?php
/**
 * Configuració general del projecte BitBazar.
 * Aquest fitxer no escriu res a la pantalla.
 */
const BOTIGA_NOM    = 'BitBazar';
const BOTIGA_LEMA   = 'La teva botiga de tecnologia';
const BOTIGA_CORREU = 'info@bitbazar.cat';

const MIN_USUARI = 4;
const MIN_CLAU   = 6;

const FULL_ESTILS   = 'estils.css';
const PAG_FORMULARI = 'registre.php';

/**
 * Usuaris de prova de l'activitat.
 * Contrasenyes de prova: Aina = BitBazar2026; Marc = Marc2026!
 * Els valors emmagatzemats són hashes, mai contrasenyes en clar.
 */
const USUARIS = [
    'aina' => [
        'nom'  => 'Aina Puig',
        'hash' => '$2y$12$uMIU.9Cny91Yz7HZUUuml.bPEqmUTDNjlOM0.hmpoUCgMnsKGvsfO0',
    ],
    'marc' => [
        'nom'  => 'Marc Soler',
        'hash' => '$2y$12$G9jq8y1c6S/ISq9AsxqAdOLh9h76SD5DzdzFt.QNnvveRypLbAHC6',
    ],
];
