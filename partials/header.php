<?php
require("_inc/function.php");
require_once('_inc/autoload.php');
add_stylesheets();
session_start();
$db = new Database();
$auth = new Authenticate($db);
//print_r($_SESSION);
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
            $menu = new Menu();
            $menuItems = $menu->index();
            foreach ($menuItems as $item) {
              echo '<li><a href="' . $item['link'] . '">' . $item['label'] . '</a></li>';
            }
          ?>
          <?php if ($auth->isLoggedIn()): ?>
  <?php
    $userRole = $auth->getUserRole();
    $adminLabel = ($userRole == 0) ? 'Admin' : 'User';
  ?>
  <li><a href="admin.php"><?= $adminLabel ?></a></li>
  <li><a href="logout.php">Odhlásiť sa</a></li>
<?php else: ?>
  <li><a href="login.php">Prihlásiť sa</a></li>
<?php endif; ?>
            </ul>
          </nav>   

        </div>           
      </div>    
    </div>
  </div>

