<?php

require_once __DIR__ . "/../src/init.php";


$page = 'home';
if (isset($_GET['page'])){
   if (in_array($_GET['page'],$pages)) {
      $page = $_GET['page'];
   }
}

include_once __DIR__ . "/../src/template/pages/$page.php";
include_once __DIR__ . "/../src/template/template.php";
//include_once __DIR__ . "/../src/template/partials/head.php";
//echo $page_content;
//include_once __DIR__ . "/../src/template/partials/footer.php";

?>