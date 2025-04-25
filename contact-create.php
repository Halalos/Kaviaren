<?php
include('partials/header.php');
$db=new Database();
  $contact=new Contact($db);

  if($_SERVER['REQUEST_METHOD']=='POST'){
    //print_r($_POST);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    if($contact->create($name, $email, $message)){
      header('Location: thankyou.php');
      exit;
    }else{
      echo "Npodarilo sa odoslať formular.";
    }
  }
?>
<section class="container">
  <h1>Vytvorenie sprav admninovi</h1>
<form id="contact" action="thankyou.php" method="POST">
          <input type="text" placeholder="Vaše meno" id ="name" name="name" required><br>
          <input type="email" placeholder="Váš email" id="email" name="email" required><br>
          <textarea placeholder="Vaša správa" id="message" name="message" ></textarea><br>
          <input type="submit" value="Odoslať">
        </form>
        </section>
 <?php
include('partials/footer.php');
?>       