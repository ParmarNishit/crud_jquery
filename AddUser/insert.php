<?php

include 'DBConnection/connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT users (USERNAME, PASSWORD) VALUES ('{$username}', '{$password}') ";
$result = mysqli_query($connection, $query);

if ($result) {
    echo '<div class="alert alert-success" role="alert">User added sucessfully</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">User not added</div>';
}
