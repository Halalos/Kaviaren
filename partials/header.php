<?php
require("_inc/function.php");
add_stylesheets();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe House Template</title>
</head>
<body>

  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="img/logo.png" alt="Logo" class="tm-site-logo">
            <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
          </div>

          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>

          <nav class="tm-nav">
            <ul>
              <?php 
              $pages = array(
                'Home' => 'index.php',
                'Today Special' => 'today-special.php',
                'Menu' => 'menu.php',
                'Contact' => 'contact.php'
              );
              echo get_menu($pages);
              ?>
            </ul>
          </nav>   

        </div>           
      </div>    
    </div>
  </div>

  <?php
    $db = new Database();
    $connection = $db->getConnection();
    // if($connection){
    //   echo "Mame spojenie";
    // }
  ?>
</body>
</html>
