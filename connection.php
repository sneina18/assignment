<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $datebaseName = "work";
$servername = "localhost";
$username = "root";
$password = "engineer";
$datebaseName = "assignment";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$datebaseName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>