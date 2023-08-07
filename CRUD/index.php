<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password);

if($conn->connect_error){
    die("connection failed: " . $$conn->connect_error);
}


$conn->close();

?>