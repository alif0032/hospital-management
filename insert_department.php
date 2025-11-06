<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn) die("Connection failed: ".mysqli_connect_error());

$deptname=$_POST['deptname'];
$sql="INSERT INTO Department (DeptName) VALUES ('$deptname')";

if(mysqli_query($conn,$sql)){
    echo "Department added successfully.<br>";
} else {
    echo "Error: ".mysqli_error($conn);
}
echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
