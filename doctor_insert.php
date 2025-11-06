<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "hospital";  // Change if your database name is different

$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$specialization = $_POST['specialization'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO doctors (name, specialization, phone, email) 
        VALUES ('$name', '$specialization', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Doctor added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
