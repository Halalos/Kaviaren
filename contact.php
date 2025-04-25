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
            <div id="google-map"></div>
        </div> 
    </form>
</div>

<script>
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468, 100.567481),
            scrollwheel: false
        };
        
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });
        
        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&callback=initialize';
        document.body.appendChild(script);
    }

    $(document).ready(function() {                
        loadGoogleMap();                
    });
</script>

<?php
    include("partials/footer.php");
?>