<?php
include_once("db.php");

$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$db->query('INSERT INTO `users`(`username`, `name`) VALUES("name", "username") ');
$statement_one = $db->prepare('SELECT `name` FROM `users` WHERE `username` = ?');
$name = 'Bob';
$statement_one->bind_param('s', $name);
$statement_one->execute();

$statement_two = $db->prepare('SELECT * FROM `users` WHERE `username` = ? AND `$height` = ? AND `age` = ?' );
$height  = 185.5;
$age  = 12;
//string, integer, blob or double
$statement_two->bind_param('sdi', $name, $height, $age);
$statement_two->execute();



