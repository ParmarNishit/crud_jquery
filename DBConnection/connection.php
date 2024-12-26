<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$connection = new mysqli($server, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed");
}