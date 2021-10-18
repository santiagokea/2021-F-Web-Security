



<?php
require_once('db.php');
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$q = $_db->prepare("SELECT * FROM users 
                    WHERE user_email='$user_email' 
                    AND user_password = '$user_password' ");
$q->execute();
$rows = $q->fetchAll();
header('Content-Type: application/json');
echo json_encode($rows);














