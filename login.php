<?php


$username = $_POST["username"];
$password = md5($_POST["password"]);

session_start();

$_SESSION["username"] = $username;



?>