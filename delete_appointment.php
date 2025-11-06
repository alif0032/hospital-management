<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$appointment_id = $_POST['appointment_id'];

$sql = "DELETE FROM Appointment WHERE AppointmentID=$appointment_id";

if(mysqli_query($conn, $sql)){
    echo "Appointment deleted successfully.<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
