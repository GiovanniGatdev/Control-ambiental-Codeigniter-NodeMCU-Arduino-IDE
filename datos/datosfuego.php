<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conam";
$chipid = $_POST ['chipid'];
$status = $_POST ['status'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sensor_fuego (dispositivo, status)
VALUES ('$chipid', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 