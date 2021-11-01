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
  
  <form>
    <?php _set_csrf() ?>
    <input type="text" value="Shoes">
    <button>Delete item</button>
  </form>

</body>
</html>