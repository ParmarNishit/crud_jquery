<?php

include '/xampp/htdocs/crud_jquery/DBConnection/connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = "insert into users (username, password) VALUES ('{$username}', '{$password}') ";
$result = mysqli_query($connection, $query);

if ($result) {
    echo 'Success';
} else {
    echo 'Failed';
}