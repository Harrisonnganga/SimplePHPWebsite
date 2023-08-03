<?php include "partials/head.php"; ?>
<?php include "partials/header.php"; ?>
<?php include "Database.php"; ?>

<body>
    <!DOCTYPE html>
    <html>


    </head>

    <body>
            <h1>Contact Us</h1>
            <hr>
            <form action="thank_you" method="POST"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>

            <button type="submit">Submit</button><br>
            </form>
        
        
        <?php include "partials/footer.php"; ?>

        
