<?php

$page_title = "Accueil - MonSite.com";

// $niceData = htmlspecialchars("Bonjour je tente une piraterie <script>alert('hacked')</script>");
// $badData = "FAILLE Stored XSS <script>alert('hacked')</script>";

// on_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaîne de caractère
ob_start();
$actualRole = 1;
if ($user !== false) $actualRole = $user->role;
if ($actualRole ==1000) { ?>
    <h1>Welcome Admin</h1>
 <?php } else if ($actualRole == 200) { ?> 
    <h1>Welcome Manager</h1> 
<?php } else if ($actualRole == 10) { ?> 
    <h1>Welcome Customers</h1>
<?php } else { ?>
    <h1>On hold wait your validation account</h1>
<?php } ?>







<style></style>






<?php if ($actualRole == 1000 || $actualRole ==200 ) { ?>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Manage User Account</text></svg>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                  <button type="button" href="/src/template/pages/accountPage.php" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Verfiy Transfert</text></svg>
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: verify Transfert" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"> Verify Operation</text></svg>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>

                








<?php if ($actualRole == 10) { ?>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"> withdrawal/Deposit request </text></svg>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                <a href="/?page=menu_retrait_depot" type="button" class="btn btn-sm btn-outline-secondary">Request</a>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"> Transfert request </text></svg>
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/?page=transactions" type="button" class="btn btn-sm btn-outline-secondary">Request</a>
                
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: verify Transfert" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"> My operation</text></svg>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/?page=conversion" type="button" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
          </div>
        </div>
    <?php } ?>


<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaîne de caractère
$page_content = ob_get_clean();

// Script de la page home
ob_start();
?>

<?php
$page_scripts = ob_get_clean();
?>