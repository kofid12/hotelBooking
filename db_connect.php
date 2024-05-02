<?php
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$databaseName = 'hotel_booking';

// Create connection
$connect = mysqli_connect($hostName, $userName, $password, $databaseName);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
