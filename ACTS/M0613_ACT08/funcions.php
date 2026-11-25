<?php
/**
 * Funcions pròpies del projecte.
 * Aquest fitxer no escriu res a la pantalla.
 */

function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

function etiqueta(string $clau): string
{
    $noms = [
        'nom'       => 'Nom',
        'cognoms'   => 'Cognoms',
        'correu'    => 'Correu electrònic',
        'usuari'    => 'Nom d\'usuari',
        'naixement' => 'Data de naixement',
        'adreca'    => 'Adreça',
        'cp'        => 'Codi postal',
        'poblacio'  => 'Població',
        'telefon'   => 'Telèfon',
        'origen'    => 'Com ens has conegut',
        'butlleti'  => 'Butlletí',
    ];
    return $noms[$clau] ?? ucfirst($clau);
}

function validaCorreu(string $correu): bool
{
    return strpos($correu, '@') !== false && strpos($correu, '.') !== false;
}

function validaCodiPostal(string $cp): bool
{
    return strlen($cp) === 5 && is_numeric($cp);
}

/**
 * Comprova les credencials contra la llista d'usuaris.
 * Retorna les dades de l'usuari o null si no són correctes.
 */
function comprovaCredencials(string $usuari, string $clau): ?array
{
    if (!isset(USUARIS[$usuari])) {
        return null;
    }

    if (!password_verify($clau, USUARIS[$usuari]['hash'])) {
        return null;
    }

    return USUARIS[$usuari];
}
