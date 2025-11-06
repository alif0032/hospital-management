<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$dept_id = $_POST['dept_id'];

$sql = "DELETE FROM Department WHERE DeptID=$dept_id";

if(mysqli_query($conn, $sql)){
    echo "Department deleted successfully.<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
