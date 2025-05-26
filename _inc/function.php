<?php 
function get_menu(array $pages): string {
    $menuItems = '';
    foreach ($pages as $page_name => $page_url) {
        $menuItems .= '<li><a href="' . htmlspecialchars($page_url) . '">' . htmlspecialchars($page_name) . '</a></li>';
    }
    return $menuItems;
}

function add_scripts(): void {
    echo '<script src="js/jquery-1.11.2.min.js"></script>';
    echo '<script src="js/templatemo-script.js"></script>';
}

function add_stylesheets(): void {
    echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">';
    echo '<link href="css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="css/font-awesome.min.css" rel="stylesheet">';
    echo '<link href="css/templatemo-style.css" rel="stylesheet">';
    echo '<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">';
}
?>
