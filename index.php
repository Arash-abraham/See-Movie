<?php
require 'php/routes.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

foreach ($routes as $route) {
    if ($route['path'] === $requestUri) {
        $controller = new $route['controller']();
        $controller->{$route['method']}();
        exit;
    }
}

http_response_code(404);
echo "404 Not Found";
