<?php
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri == '/Login') {
    include 'html/login.html';
} else {
    echo "صفحه مورد نظر یافت نشد.";
}
?>
