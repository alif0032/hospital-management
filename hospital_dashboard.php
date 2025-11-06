<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Management Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f2f5; margin: 20px; }
        .container { max-width: 1200px; margin: auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        h1 { text-align: center; margin-bottom: 40px; color: #333; }
        h2 { margin-top: 40px; color: #007BFF; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007BFF; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .no-data { color: gray; font-style: italic; }
    </style>
</head>
<body>
<div class="container">
    <h1>Hospital Management System Dashboard</h1>

    <?php
    $tables = ['department', 'doctor', 'patient', 'appointment', 'staff', 'billing'];

    foreach ($tables as $table) {
        echo "<h2>" . ucfirst($table) . " Table</h2>";

        $res = $conn->query("SELECT * FROM $table");

        if ($res && $res->num_rows > 0) {
            echo "<table><tr>";
            while ($fieldinfo = $res->fetch_field()) {
                echo "<th>{$fieldinfo->name}</th>";
            }
            echo "</tr>";

            while ($row = $res->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $val) {
                    echo "<td>" . htmlspecialchars($val) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='no-data'>No records found in <strong>$table</strong> table.</p>";
        }
    }

    $conn->close();
    ?>
</div>
</body>
</html>
