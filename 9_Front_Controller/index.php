<?php

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'about':
        echo 'pages/about.php';
        break;
    default:
        echo 'pages/home.php';
        break;
}

?>