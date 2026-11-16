<?php

/**
 * Funciones propias del proyecto.
 * Este fichero NO escribe nada en la pantalla.
 */



/**
 * Recoge un campo de texto del formulario ya limpio de espacios.
 *
 * @param string $camp    Nombre del campo (el atributo name del formulario)
 * @param string $defecte Valor si el campo no ha llegado
 * @return string         El valor limpio
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}



/**
 * Convierte la clave del array en una etiqueta legible.
 *
 * @param string $clau Clave del array ('cp', 'naixement'...)
 * @return string      Etiqueta para mostrar en la tabla
 */
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
        'butlleti'  => 'Butlletí'
    ];

    return $noms[$clau] ?? ucfirst($clau);
}



/**
 * Comprueba si un correo tiene una forma válida.
 *
 * @param string $correu Correo escrito por el usuario
 * @return bool          true si tiene @ y un punto, false si no
 */
function validaCorreu(string $correu): bool
{
    if (strpos($correu, '@') === false) {
        return false;
    }

    if (strpos($correu, '.') === false) {
        return false;
    }

    return true;
}



/**
 * Comprueba si un código postal tiene 5 cifras.
 *
 * @param string $cp Código postal escrito por el usuario
 * @return bool      true si son 5 cifras, false si no
 */
function validaCodiPostal(string $cp): bool
{
    if (strlen($cp) !== 5) {
        return false;
    }

    return is_numeric($cp);
}
