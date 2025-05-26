<?php
include('partials/header.php');
$db = new Database();
$auth = new Authenticate($db);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if($auth->login($email,$password)){
        header('Location: admin.php');
        exit;
    }else{
        $error = 'Nesprávne meno alebo heslo';
    }
}
?>
<section class="container">
    <h2>Prihlásenie</h2>
    <?php if(isset($error)):?>
        <div style="color:red;">
            <?php echo $error; ?>
        </div>
    <?php endif;?>
    <form method="POST" >
    <div class="col-lg-6 col-md-6">
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required><br>
        </div>
        <div class="form-group">
        <label for="password" >Heslo:</label>
        <input type="password" class="form-control" id="password" name="password" required><br>
        <button class="tm-more-button" type="submit">Prihlásiť sa</button>
        </div>
    </div>
    </form>
</section>
<?php
include('partials/footer.php');
?>
