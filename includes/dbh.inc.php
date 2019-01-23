<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "sandygirl1";
$dBName = "senior_project";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}