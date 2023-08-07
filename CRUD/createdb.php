<?php
$hostname = 'localhost';
$username = 'root';
$password = '';


$conn = new mysqli($hostname, $username, $password);

if($conn->connect_error){
    die("connection failed: " . $$conn->connect_error);
}else{
    echo "connected";
}

$sql = "CREATE DATABASE mytest";

if($conn->query($sql) === true){
  echo "DB CREATE";
}else{
    echo $conn->error;
};


$conn->close();




?>