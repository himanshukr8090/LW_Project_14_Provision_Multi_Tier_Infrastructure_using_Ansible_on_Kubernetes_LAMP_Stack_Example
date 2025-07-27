<?php
$host = 'mysql'; // MySQL service name in Kubernetes
$db = 'lampdb';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);

echo "<h2>LAMP Stack Test Page</h2>";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to MySQL database: <strong>$db</strong><br>";
    
    $sql = "CREATE TABLE IF NOT EXISTS visits (id INT AUTO_INCREMENT PRIMARY KEY, ts TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
    $conn->query($sql);

    $conn->query("INSERT INTO visits () VALUES ()");

    $result = $conn->query("SELECT COUNT(*) as count FROM visits");
    $row = $result->fetch_assoc();
    echo "This page has been visited <strong>" . $row['count'] . "</strong> times.";
}

$conn->close();
?>