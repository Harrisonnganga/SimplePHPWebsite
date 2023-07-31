<?php
$host = "localhost";
$dbname = " contact_form_submissions";
$username = "root";
$password = "*manasseh*";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection error: " . $conn->connect_error);
}
?>