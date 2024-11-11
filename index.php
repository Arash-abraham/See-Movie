<?php
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri == '/Login') {
    include 'html/login.html';
} else {
    include '404/404.html';
}
?>
