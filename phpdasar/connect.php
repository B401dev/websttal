<?php

// koneksi ke database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "latihan";


// Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection Failed:". $conn->connect_error);
}
