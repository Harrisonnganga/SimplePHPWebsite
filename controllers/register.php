<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $username = 'root';
    $password = '*manasseh*';
    $dbname = 'homestead';

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) { 
        die("Unable to connect to the database: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash_password
    $Password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$Password_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "You are registered successfully";
    }
}
?>
<?php require "views/register.view.php";?>

