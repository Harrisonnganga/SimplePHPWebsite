<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'homestead';
    // Connect to the database
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $username = $_POST['username'];
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password using password_verify() function
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: home.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>