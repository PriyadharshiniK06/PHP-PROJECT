<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "logistic_web";

$connection = new mysqli($server_name, $user_name, $password, $db_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

