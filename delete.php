<?php
include 'functions.php';
$db = include 'database/statrt.php';

$id = $_GET['id'];
$post = $db->delete('posts',$id);

header('Location: /index.php');
?>