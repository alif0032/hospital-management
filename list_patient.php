<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

echo "<h2>All Patients</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['PatientID']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['DOB']."</td>
                <td>".$row['Gender']."</td>
                <td>".$row['Contact']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No patients found</td></tr>";
}
echo "</table>";
$conn->close();
?>
