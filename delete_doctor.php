<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$doctor_id = $_POST['doctor_id'];


$sql = "DELETE FROM doctor WHERE DoctorID = $doctor_id";

if ($conn->query($sql) === TRUE) {
    echo "Doctor deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
