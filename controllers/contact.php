<?php
 require "views/contact.view.php";

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'homestead';

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) { 
        die("Unable to connect to the database: " . $conn->connect_error);
}
 
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $sql = "INSERT INTO contact_form (username, email, message) VALUES ('$username', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us";
    }
}

 ?>


