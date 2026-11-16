<?php

require_once 'config.php';



$titolPagina = 'Crea el teu compte';

require 'header.php';

?>

        <h2>Crea el teu compte</h2>

        <form action="processa.php" method="post">

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">

            <label for="cognoms">Cognoms</label>
            <input type="text" id="cognoms" name="cognoms">

            <label for="correu">Correu electrònic</label>
            <input type="text" id="correu" name="correu">

            <label for="usuari">Nom d'usuari (mínim <?= MIN_USUARI ?> caràcters)</label>
            <input type="text" id="usuari" name="usuari">

            <label for="clau">Contrasenya (mínim <?= MIN_CLAU ?> caràcters)</label>
            <input type="password" id="clau" name="clau">

            <label for="clau2">Repeteix la contrasenya</label>
            <input type="password" id="clau2" name="clau2">

            <label for="naixement">Data de naixement</label>
            <input type="date" id="naixement" name="naixement">

            <label for="adreca">Adreça</label>
            <input type="text" id="adreca" name="adreca">

            <label for="cp">Codi postal</label>
            <input type="text" id="cp" name="cp">

            <label for="poblacio">Població</label>
            <input type="text" id="poblacio" name="poblacio">

            <label for="telefon">Telèfon</label>
            <input type="text" id="telefon" name="telefon">

            <label for="origen">Com ens has conegut?</label>
            <select id="origen" name="origen">
                <option value="Amics">Per amics</option>
                <option value="Xarxes socials">Per xarxes socials</option>
                <option value="Cercador">Per un cercador</option>
            </select>

            <label>
                <input type="checkbox" name="butlleti">
                Vull rebre el butlletí
            </label>

            <label>
                <input type="checkbox" name="condicions">
                Accepto les condicions d'ús
            </label>

            <button type="submit">Crear el compte</button>

        </form>

<?php

require 'footer.php';
