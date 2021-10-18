<?php

require_once('db.php');

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password']; // Enter this: ' OR  1='1

$q = $_db->prepare("SELECT * FROM users WHERE user_email = '{$user_email}' AND user_password = '{$user_password}'");
// $q = $_db->prepare("SELECT * FROM users WHERE user_email = '{$user_email}' AND user_password = ''");
// ' OR  1='1


$q->execute();
$row = $q->fetchAll();
if(!$row){ echo 'User not found'; exit(); }
header("Content-Type: application/json");
echo json_encode($row);



