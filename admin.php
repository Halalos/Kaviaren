<?php
include('partials/header.php');

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();
//var_dump($contacts);

if (isset($_GET['delete'])) {
    $contact->destroy($_GET['delete']);
    
    header('Location: admin.php');
    exit;
}
?>

<section class="container">
    <h1>Vítaj admin</h1>
    <h2>Kontakty</h2>
    <a href="contact-create.php">Vytvorit spravu</a>
    <table border="1">
        
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Sprava</th>            
            <th>Odstranit</th>
            <th>Zobrazit</th>
            <th>Editovat</th>
        </tr>
        <?php
            foreach ($contacts as $con){
                echo '<tr>';
                echo '<td>'.$con['id'].'</td>';
                echo '<td>'.$con['name'].'</td>';
                echo '<td>'.$con['email'].'</td>';
                echo '<td>'.$con['message'].'</td>';
                echo '<td><a href="?delete='.$con['id'].'" 
                onclick="return confirm(\'Urcite chcete vymazat tuto spravu?\')">Delete</a></td>';
                echo '<td><a href="contact-show.php?id='.$con['id'].'">Zobrazit</a></td>'; 
                echo '<td><a href="contact-edit.php?id='.$con['id'].'">Editovat</a></td>'; 
                echo '</tr>';
            }
        ?>


    </table>



</section>

<?php
include('partials/footer.php');
?>