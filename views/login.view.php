<?php include "partials/head.php"; ?>
<?php include "partials/header.php"; ?>
<?php include "Database.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <hr>
    <form action="login" method="POST"><br>
        Username: <input type="text" name="username" placeholder="name"><br><br>
        Email: <input type="email" name="email" placeholder="email"><br><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>

</body>
</html>