<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn) die("Connection failed: ".mysqli_connect_error());

$patient_id = $_POST['patient_id'];
$sql = "DELETE FROM Patient WHERE PatientID=$patient_id";

if(mysqli_query($conn,$sql)){
    echo "Patient deleted successfully.<br>";
} else {
    echo "Error: ".mysqli_error($conn);
}
echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
