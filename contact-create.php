<?php
include('partials/header.php');
$db = new Database();
$contact = new Contact($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //print_r($_POST);
    if ($contact->create($name, $email, $message)) {
      header("Location: admin.php");
      exit;
    } else {
        echo "Error creating contact.";
    }
  }
?>
<section class="container">
    <h1>Pridanie kontaktu</h1>
    <form id="contact" action="" method="POST">
    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Vaše meno" id ="name" name="name" required><br>
        <input type="email"  class="form-control" placeholder="Váš email" id="email" name="email" required><br>
        <textarea placeholder="Vaša správa" class="form-control" rows="6" id="message" name="message" ></textarea><br>
        <button class="tm-more-button" type="submit">Odoslať</button>
      </div>
    </div>
    </form>
</section>

<?php
include('partials/footer.php');
?>
