<?php
$servername = "localhost";
$username = "id11493675_doctor";
$password = "3002016122";
$database="id11493675_doctor_patient";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>