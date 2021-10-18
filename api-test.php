<?php
require_once('db.php');
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$q = $_db->prepare("SELECT * FROM users");
$q->execute();
$rows = $q->fetchAll();
header('Content-Type: application/json');
echo json_encode($rows);









