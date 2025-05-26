<?php
   include("partials/header.php");

   // Inštancia databázy a kontakt triedy
   $db = new Database();
   $contact = new Contact($db);
   
   // Spracovanie formulára
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $name = $_POST['name'] ?? '';
       $email = $_POST['email'] ?? '';
       $subject = $_POST['subject'] ?? '';
       $message = $_POST['message'] ?? '';
   
       if ($contact->create($name, $email, $subject, $message)) {
           header('Location: thankyou.php');
           exit;
       } else {
           echo "<p class='error'>Nepodarilo sa odoslať formulár.</p>";
       }
   }
?>

<!-- Google Map CSS -->
<style> 
  iframe { 
    margin: auto;
    display: block;
    width: 100%;
    height: 400px;
  }
  .tm-contact-form {
        margin-top: 60px;
    }
</style>

<div class="container tm-position-relative">
    <!-- Existing HTML content -->
    <form action="contact.php" method="POST" class="tm-contact-form">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="NAME" required />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="EMAIL" required />
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="SUBJECT" />
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
            </div>
            <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Send message</button> 
            </div>               
        </div>
        <div class="col-lg-6 col-md-6">
            <!-- Google Map Iframe -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.6887034971555!2d18.081702994327806!3d48.30883822077357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3f2367d7c97f%3A0x4427b400b1e600b7!2sCaff%C3%A9%20Trieste%20Nitra!5e0!3m2!1shu!2ssk!4v1746530179610!5m2!1shu!2ssk" 
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div> 
    </form>
</div>

<?php
    include("partials/footer.php");
?>
