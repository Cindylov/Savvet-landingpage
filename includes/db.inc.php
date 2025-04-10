<?php
$host = 'localhost'; // or your DB server host
$db = 'savvet'; // your database name
$username = 'root'; // your database username
$password = ''; // your database password

$connection = new mysqli($host, $username, $password, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

