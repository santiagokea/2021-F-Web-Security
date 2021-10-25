<?php
require_once("globals.php");
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
  <div id="blogs">
    <?php
    // Pretend we connected to the DB 
    // Pretend that we selected bogs
    // Read from file
    // $comment = htmlspecialchars(file_get_contents("comment.txt"));
    // echo $comment;
    $comment = file_get_contents("comment.txt");
    out($comment)
    ?>
  </div>
</body>
</html>