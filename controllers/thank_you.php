<?php include "partials/head.php"; ?>
<?php include "partials/header.php"; ?>

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

<body>
<?php include "controllers/contact.php"; ?>
    <hr>
    <h1>Thank You</h1>
    <p>Thank you for contacting us we will get back to you soon, Welcome again</p>
    <footer>
    <?php include "partials/footer.php"; ?>
    </footer>