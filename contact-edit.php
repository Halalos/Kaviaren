<?php
    include('partials/header.php');
    $db = new Database();
    $contact = new Contact($db);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $contactData = $contact->show($id); 
        

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $contactData['name'];
            $email = $contactData['email']; 
            $message = $contactData['message'];  
            if($contact->update($id, $name, $email, $message)){
                header('Location: admin.php');
                exit;
            }else{
                echo "Nepodarilo sa upravit spravu.";
            }
        }
    }
?>
<section class="container">
  <h1>Editovanie spravy </h1>
<form id="contact" action="admin.php" method="POST">
          <input type="text" id ="name" name="name" value="<?php echo $contactData['name']?>" required><br>
          <input type="email"  id="email" name="email" value="<?php echo $contactData['email']?>" required><br>
          <textarea id="message" name="message"><?php echo $contactData['message']?></textarea><br>
          <input type="submit" value="Upravit">
        </form>
        </section>
<?php
    include('partials/footer.php');
?>