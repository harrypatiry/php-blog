<?php
    INCLUDE("addPost.php");
    post();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="title" placeholder="title"/>
        <textarea name="text"></textarea>
        <button name="new_post">Create Post</button>
    </form>
    <p>To see your post go <a href="index.php?info=added">home</a></p>
</body>
</html>