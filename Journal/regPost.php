<?php
$connect = mysqli_connect('localhost', 'root', '', 'journaldb');

session_start();

$user = $_SESSION['user'];

$name = $user[0];
$login = $user[1];
$password = $user[2];

mysqli_query($connect, "INSERT INTO advisers values (NULL, '$name', '$login', '$password', NULL)");


$connect->close();
unset($_SESSION['user']);
header('Location: auto.php');