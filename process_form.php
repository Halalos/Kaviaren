<?php
    include("partials/header.php");

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $subject = htmlspecialchars($_POST["subject"]);
        $message = htmlspecialchars($_POST["message"]);
    }

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
        echo "<h3>Form data:</h3>";
        echo "<p><strong>Name: </strong>$name</p>";
        echo "<p><strong>Email: </strong>$email</p>";
        echo "<p><strong>Subject: </strong>$subject</p>";
        echo "<p><strong>Message: </strong>$message</p>";

    }
?>