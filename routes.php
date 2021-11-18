<?php
$id = $_GET['id'];

$routes = [
    "/" => "views/homepage.php",
    "/show.php?id={$id}" => "show.php",
    "/edit.php?id={$id}" => "edit.php",
    "/delete.php?id={$id}" => "delete.php",
    "/create.php" => "create.php",
];

$rout = $_SERVER['REQUEST_URI'];

if (array_key_exists($rout,$routes)){

    include $routes[$rout];exit;
} else {
    dd(404);
}
