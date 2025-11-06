<?php
$conn = mysqli_connect("localhost","root","","hospital_db");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$bill_id = $_POST['bill_id'];

$sql = "DELETE FROM Billing WHERE BillID=$bill_id";

if(mysqli_query($conn, $sql)){
    echo "Billing deleted successfully.<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo '<a href="index.html">Back to Home</a>';
mysqli_close($conn);
?>
