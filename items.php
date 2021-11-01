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
  
  <form action="api-delete-item.php" method="POST">
    <input name="csrf" type="hidden" value="<?= _set_csrf() ?>">
    <input name="item_id" type="hidden" value="1">
    <input name="item_name" type="text" value="Shoes">
    <button>Delete item</button>
  </form>


</body>
</html>