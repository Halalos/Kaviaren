<footer>
  <?php include_once('_inc/function.php'); ?>
  <style>
    footer {
      margin-top: 60px;
    }
    .tm-social-icons-container a {
      display: inline-block;
      margin-right: 10px;
      font-size: 20px;
      color: white;
    }
    .tm-social-icons-container a:hover {
      color: #FFD700;
    }
    .tm-footer-nav ul {
      padding-left: 0;
      list-style: none;
    }
    .tm-footer-nav ul li {
      margin-bottom: 8px;
    }
    .tm-footer-nav ul li a {
      color: white;
      text-decoration: none;
    }
    .tm-footer-nav ul li a:hover {
      text-decoration: underline;
    }
  </style>

  <div class="tm-black-bg">
    <div class="container">
      <div class="row margin-bottom-60">
        
        <!-- MENU -->
        <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
          <h3 class="tm-footer-div-title">Main Menu</h3>
          <ul>
            <?php
              $customMenu = [
                ['label' => 'Home', 'link' => 'index.php'],
                ['label' => 'Today Special', 'link' => 'today-special.php'],
                ['label' => 'Menu', 'link' => 'menu.php'],
                ['label' => 'Contact', 'link' => 'contact.php']
              ];
              $menu = new Menu($customMenu);
              $menuItems = $menu->index();
              foreach ($menuItems as $item) {
                echo '<li><a href="' . $item['link'] . '">' . $item['label'] . '</a></li>';
              }
            ?>
          </ul>
        </nav>

        <!-- ABOUT -->
        <div class="col-lg-5 col-md-5 tm-footer-div">
          <h3 class="tm-footer-div-title">About Us</h3>
          <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
          <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
        </div>

        <!-- SOCIAL -->
        <div class="col-lg-4 col-md-4 tm-footer-div">
          <h3 class="tm-footer-div-title">Get Social</h3>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          <div class="tm-social-icons-container">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div>

  <!-- COPYRIGHT -->
  <div>
    <div class="container">
      <div class="row tm-copyright">
        <p class="col-lg-12 small copyright-text text-center">
          Copyright &copy; 2025 Balogh Cafe House
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/templatemo-script.js"></script>

</body>
</html>
