<?php 
 function get_menu(array $pages){
    $menuItems="";
    foreach ($pages as $page_name => $page_url){
        $menuItems .='<li><a href="'.$page_url . '">' . $page_name . '</a></li>';

    }
    return $menuItems;
 }

 function add_scripts(){
    echo '<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>';
    echo '<script type="text/javascript" src="js/templatemo-script.js"></script>';
 }

 function add_stylesheets(){
    $page_name=basename($_SERVER["SCRIPT_NAME"], '.php');
    echo " <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>";
    echo '<link href="css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="css/font-awesome.min.css" rel="stylesheet">';
    echo '<link href="css/templatemo-style.css" rel="stylesheet">';
    echo '<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />';
 }
?>