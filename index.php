<?php
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri == '/Login') {
    include 'html/login.html';
} 
else if ($request_uri != '/Login') {
    include 'html/404.html';
}
else {
    include 'html/index.html';
}
?>
