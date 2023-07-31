<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact?error=required_fields");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalid_email");
        exit;
    }

    header("Location: thank_you");
    exit;
}
?>
<hr>
<p>Thank you for contacting us we will get back to you soon.</p>
<p>Welcome again.</p><br>
<a href="/">back to Home</a>


<hr>