<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $username = 'root';
    $password = '*manasseh*';
    $database = ' contact_form_submissions';

    $conn = new mysqli($hostname, $username, $password,$database);
    if ($conn->connect_error) { 
        die("Unable to Connect database: " . $conn->connect_error);
         }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash_password
    $Password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (username, email,password) VALUES ('$username', '$email','$Password_hash')";

    $query=$db->prepare($sql);
   $query->bind_param('ssss',$username,$email,$password);
   $exec= $query->execute();
    if($exec==true)
    {
     return "You are registered successfully";
    }
    else
    {
      return "Error: " . $sql . "<br>" .$db->error;
    }
}
?>
   
 <?php include "partials/footer.php"; ?>
