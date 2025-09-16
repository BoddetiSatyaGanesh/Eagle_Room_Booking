<?php
$host = "127.0.0.1";      // MySQL server
$user = "root";           // Default user in XAMPP/WAMP
$pass = "";               // Default password is empty (unless you set one)
$dbname = "eagle_hotel"; // Your database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Database Connected Successfully"; // (Uncomment to test)
?>
