<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <header>
        <?php require "partials/header.php"; ?>
    </header>

    <h1>Register</h1>
    <hr>
    <p>Have an account?</p>

    <form action="register.php" method="post">
        Name: <input type="text" name="name" placeholder="name"><br>
        Email: <input type="email" name="email" placeholder="email"><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>

    <?php include "partials/footer.php"; ?>
</body>

</html>

