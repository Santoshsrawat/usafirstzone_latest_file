<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "usafirstzone";

// Creating Database Connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check Database Connection

if (!$conn) {
    die('Connection Failed:' . mysqli_connect_error());
}
