<?php include "partials/head.php"; ?>
<?php include "partials/header.php"; ?>
<?php include "Database.php"; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>

    <h1>Register</h1>
    <hr>
    <form action="register" method="POST"><br>
        Username: <input type="text" name="username" placeholder="name"><br><br>
        Email: <input type="email" name="email" placeholder="email"><br><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>

    <?php include "partials/footer.php"; ?>

    