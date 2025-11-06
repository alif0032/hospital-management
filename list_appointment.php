<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

echo "<h2>All Appointments</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>PatientID</th><th>DoctorID</th><th>Appointment Date</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['AppointmentID']."</td>
                <td>".$row['PatientID']."</td>
                <td>".$row['DoctorID']."</td>
                <td>".$row['AppointmentDate']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No appointments found</td></tr>";
}
echo "</table>";
$conn->close();
?>
