<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM department";
$result = $conn->query($sql);

echo "<h2>All Departments</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Department Name</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['DeptID']."</td>
                <td>".$row['DeptName']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>No departments found</td></tr>";
}
echo "</table>";
$conn->close();
?>
