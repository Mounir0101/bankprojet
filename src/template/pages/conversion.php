<?php

$page_title = "Opérations - MonSite.com";

// ob_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaine de caracteres.
ob_start();
?>
<h1>Conversion</h1>
<br>
<ol>
    <li><a href="/conversion_euro.php">conversion d'euro</a></li>
    <li><a href="/conversion_dollars.php">conversion de dollars</a></li>
    <li><a href="/conversion_bitcoin.php">conversion de bitcoin</a></li>
</ol>
<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();