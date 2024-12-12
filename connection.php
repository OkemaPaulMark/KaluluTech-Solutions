<?php
// connection.php
$host = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // your MySQL password
$dbname = "kalulutechsolution"; // your database name

// Create the connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
