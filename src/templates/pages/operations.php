<?php

$page_title = "Opérations - MonSite.com";

// ob_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaine de caracteres.
ob_start();
?>
<h1>Opérations</h1>
<br>
<ol>
    <li><a href="/retrait_bdd.php">Retrait</a></li>
    <li><a href="/transactions_bdd.php">Transaction</a></li>
    <li><a href="/depot_bdd.php">Depot</a></li>
</ol>
<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();