<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);

echo "<h2>All Doctors</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Name</th><th>Specialization</th><th>Contact</th><th>DeptID</th><th>Phone</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['DoctorID']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Specialization']."</td>
                <td>".$row['Contact']."</td>
                <td>".$row['DeptID']."</td>
                <td>".$row['phone']."</td>
               

              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No doctors found</td></tr>";
}

echo "</table>";
$conn->close();
?>
