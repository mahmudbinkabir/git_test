<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crud';

$conn = new mysqli($hostname, $username, $password,$dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE students (
        id INT (6) AUTO_INCREMENT PRIMARY KEY,
        fristname VARCHAR (30),
        lastname VARCHAR (30),
        email VARCHAR (20),
        )";

if ($conn->query($sql) === TRUE){
    echo "Table Created";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>