<?php
include 'functions.php';
$db = include "database/statrt.php";


$posts = $db->getAll('posts');

include "index.view.php";

?>