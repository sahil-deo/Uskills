<?php

$servername = "sql211.infinityfree.com";
$username = "if0_37230167";
$password = "skiller9inif"; // Add your password if any
$dbname = "if0_37230167_events";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
