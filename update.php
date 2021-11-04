<?php
include 'functions.php';
$db = include 'database/statrt.php';

$post = $db->update('posts', [
    'title' => $_POST['title']
], $_GET['id']);

header('Location: /index.php');
?>