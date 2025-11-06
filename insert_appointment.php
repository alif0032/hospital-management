<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
$patientid=$_POST['patientid'];
$doctorid=$_POST['doctorid'];
$date=$_POST['date'];
$time=$_POST['time'];
$status=$_POST['status'];

$sql="INSERT INTO Appointment (PatientID,DoctorID,Date,Time,Status) VALUES ($patientid,$doctorid,'$date','$time','$status')";

if(mysqli_query($conn,$sql)){
    echo "Appointment added successfully.<br>";
} else {
    echo "Error: ".mysqli_error($conn);
}
echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
