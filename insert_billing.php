<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
$patientid=$_POST['patientid'];
$amount=$_POST['amount'];
$date=$_POST['date'];

$sql="INSERT INTO Billing (PatientID,Amount,Date) VALUES ($patientid,$amount,'$date')";

if(mysqli_query($conn,$sql)){
    echo "Billing added successfully.<br>";
} else {
    echo "Error: ".mysqli_error($conn);
}
echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
