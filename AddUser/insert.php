<?php

include '/xampp/htdocs/crud_jquery/DBConnection/connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$hasedpassword = password_hash($password, PASSWORD_DEFAULT);

$query = "insert into users (username, password) VALUES ('{$username}', '{$hasedpassword}') ";
$result = mysqli_query($connection, $query);

if ($result) {
    echo 'Success';
} else {
    echo 'Failed';
}