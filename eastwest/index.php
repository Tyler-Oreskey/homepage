<?php
    // Get direction from GET params. Default to east if not set.
    $direction = isset($_GET['direction']) ? $_GET['direction'] : 'west';
    $url = $_SERVER['REQUEST_URI'];

    if (strpos($url, 'index.php')) {
        $url = str_replace("index.php", "", $_SERVER['REQUEST_URI']);
    }

    if (!strpos($url, 'direction')) {
        // default to east if no direction paramter is present
        header("Location: $url?direction=east");
    }

    $postPage = isset($_POST['page']) ? $_POST['page'] : 'home';
    $globalStyles = "./styles/$direction/global.css";
    $pageStyles = "./styles/$direction/$postPage.css";
    $pageTitle = ucfirst($postPage);

    include "content/header.php";
    include "./content/nav.php";
    include "./content/$postPage.php";
    include "./content/footer.php";
