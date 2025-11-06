<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $contact = $_POST['contact'];
    $deptid = $_POST['deptid'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO doctor (Name, Specialization, Contact, DeptID, Phone)
            VALUES ('$name', '$specialization', '$contact', $deptid, '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Doctor added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $contact = $_POST['contact'];
    $deptid = $_POST['deptid'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO doctor (Name, Specialization, Contact, DeptID, Phone)
            VALUES ('$name', '$specialization', '$contact', $deptid, '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Doctor added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
