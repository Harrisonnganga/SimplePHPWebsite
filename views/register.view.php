<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<header>
    <?php require "partials/header.php" ?>
</header>

<body>
    

        <?php
        echo "<h1>Register</h1>";
        echo "<hr>";
        echo "<p>Have an account?</p>";
        ?>
        <?php ?>

        <form action="register.php" method="get">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>
        




</body>

</html>