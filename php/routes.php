<?php
$routes = [
    [
        'path' => '/',
        'controller' => 'HomeController',
        'method' => 'index',
    ],
    [
        'path' => '/Login',
        'controller' => 'LoginController',
        'method' => 'index',
    ],
    [
        'path' => '/404',
        'controller' => '404Controller',
        'method' => 'index',
    ]
];
