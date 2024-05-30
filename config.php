<?php
$servername = "dbgradebook.mysql.database.azure.com";
$username = "albatin";
$password = "Grupi7123";
$dbname = "gradebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
