<?php



$servername = "localhost";
$username   = "root";     
$password   = "";         
$dbname     = "hospital"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $special  = $_POST['specialization'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];

    
    $sql = "INSERT INTO doctor (name, specialization, phone, email)
            VALUES ('$name', '$special', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New doctor record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
