<?php

$conn = mysqli_connect("localhost", "root", "", "hospital_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $role = $_POST['role'] ?? '';
    $contact = $_POST['contact'] ?? '';

    
    $sql = "INSERT INTO Staff (Name, Role, Contact) VALUES ('$name', '$role', '$contact')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>✅ Staff added successfully.</h3>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}

echo '<br><a href="index.html">Back to Home</a>';


mysqli_close($conn);
?>
