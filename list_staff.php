<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

echo "<h2>All Staff</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Name</th><th>Role</th><th>Contact</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['StaffID']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Role']."</td>
                <td>".$row['Contact']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No staff found</td></tr>";
}
echo "</table>";
$conn->close();
?>
