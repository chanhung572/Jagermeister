<?php
$connect['host'] = 'localhost';
$connect['dbname'] = 'info';
$connect['username'] = 'root';
$connect['password'] = '';

// Create connection
$conn = new mysqli($connect['host'], $connect['username'], $connect['password'], $connect['dbname']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
