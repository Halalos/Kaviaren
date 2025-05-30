    <?php
    include('partials/header.php');

    $db = new Database();
    $user = new User($db);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $userData = $user->show($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            if ($user->edit($id, $name, $email, $role)) {
                header("Location: admin.php");
                exit;
            } else {
                echo "<p style='color: red;'>Error editing user. Možno už existuje používateľ s týmto emailom.</p>";
            }
        }
    }
    ?>

    <section class="container">
        <h1>Update User</h1>
        <form id="user" action="" method="POST">
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($userData['name']) ?>" required><br>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($userData['email']) ?>" required><br>

            <select id="role" class="form-control" name="role" required>
                <option value="0" <?= $userData['role'] == 0 ? 'selected' : '' ?>>Admin</option>
                <option value="1" <?= $userData['role'] == 1 ? 'selected' : '' ?>>User</option>
            </select><br>
            <button class="tm-more-button" type="submit">Uložiť zmeny</button>
        </div>
        </div>
        </form>
    </section>


    <?php
    include('partials/footer.php');
    ?>
