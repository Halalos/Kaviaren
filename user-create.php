<?php
include('partials/header.php');

$db = new Database();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role']; // tu príde 0 alebo 1
    $password = $_POST['password'];

    if ($user->create($name, $email, $role, $password)) {
        header("Location: admin.php");
        exit;
    } else {
        echo "<p style='color: red;'>Error creating user. Možno už existuje používateľ s týmto emailom.</p>";
    }
}
?>

<section class="container">
    <h1>Pridanie používateľa</h1>
    <form id="user" action="" method="POST">
    <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Meno" id="name" name="name" required><br>
        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required><br>
        
        <select id="role" class="form-control" name="role" required>
            <option value="" disabled selected>Vyberte rolu</option>
            <option value="0">Admin</option>
            <option value="1">User</option>
        </select><br>

        <input type="password" class="form-control" placeholder="Heslo" id="password" name="password" required><br>
        <button class="tm-more-button" type="submit" >Vytvoriť</button>
        
        </div>
    </div>
    </form>
</section>

<?php
include('partials/footer.php');
?>
