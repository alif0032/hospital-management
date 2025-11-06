<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "hospital_db");
if(!$conn) die("Connection failed: " . mysqli_connect_error());

// Make sure POST variables exist
if(isset($_POST['name'], $_POST['dob'], $_POST['gender'], $_POST['contact'])) {

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO Patient (Name, DOB, Gender, Contact) VALUES ('$name','$dob','$gender','$contact')";

    if(mysqli_query($conn, $sql)){
        echo "Patient added successfully.";
    } else {
        echo "Error: ".mysqli_error($conn);
    }

} else {
    echo "Please fill the form and submit.";
}

mysqli_close($conn);
?>
