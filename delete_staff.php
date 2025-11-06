<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$staff_id = $_POST['staff_id'];

$sql = "DELETE FROM Staff WHERE StaffID=$staff_id";

if(mysqli_query($conn, $sql)){
    echo "Staff deleted successfully.<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
