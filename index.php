<?php
    $request_uri = $_SERVER['REQUEST_URI'];
    
    if ($request_uri == '/Login') {
        include 'php/login.php';
    }
    else if ($request_uri == '/') {
        include 'html/index.html';
    }
    else {
        include 'html/404.html'; 
    }
?>
