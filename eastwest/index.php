<?php
    $direction = isset($_GET['direction']) ? $_GET['direction'] : 'west';
    $page = isset($_POST['page']) ? $_POST['page'] : 'index';
    
    $globalStyles = "./styles/$direction/global.css";
    $pageStyles = "./styles/$direction/$page.css";
    $pageTitle = ucfirst($direction) . ' ' . ucfirst($page);

    include "content/header.php";
    include "./content/nav.php";
    include "./content/$page.php";
    include "./content/footer.php";