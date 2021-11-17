<?php
include __DIR__ . '/../functions.php';

$routes = [
    "/" => "views/homepage.php",
    "/about" => "views/about.php"
];

$rout = $_SERVER['REQUEST_URI'];

if (array_key_exists($rout,$routes)){

    include __DIR__ . '/../' . $routes[$rout];exit;
} else {
    dd(404);
}