<?php
include 'functions.php';
$db = include 'database/statrt.php';

$id = $_GET['id'];
$post = $db->getOne('posts',$id);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=<?=$post['id'];?>" method="post">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$post['title'];?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>