<?php
include "functions.php";
$db = include 'database/statrt.php';

$db->create('posts', [
    'title' => $_POST['title']
]);

header('Location: /index.php');
?>