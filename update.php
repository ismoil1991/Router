<?php
$db = include 'database/start.php';

$post = $db->update('posts', [
    'title' => $_POST['title'],
    'id' => $_GET['id']
]);

header('Location: /index.php');
?>