<?php
include('partials/header.php');
$db = new Database();
$contact = new Contact($db);

if(isset($_GET['id'])){
    //print_r($_GET['id']);
    $id = $_GET['id'];
    $contactData = $contact->show($id);
    //print_r($contactData);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        //print_r($_POST);
        if ($contact->edit($id,$name, $email, $message)) {
          header("Location: admin.php");
          exit;
        } else {
            echo "Error editing contact.";
        }
      }
}

?>

<section class="container">
    <h1>Update contact</h1>
    <form id="contact" action="" method="POST">
    <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" id ="name" name="name" value="<?php echo($contactData['name']);?>" required><br>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo($contactData['email']);?>"required><br>
        <textarea id="message" class="form-control" name="message"><?php echo($contactData['message']);?></textarea><br>
        <button class="tm-more-button" type="submit">Odoslať</button>
        </div>
    </div>
    </form>
</section>

<?php
include('partials/footer.php');
?>
