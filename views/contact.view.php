<?php include "partials/head.php"; ?>
<?php include "partials/header.php"; ?>
<?php include "Database.php"; ?>

<body>
    <!DOCTYPE html>
    <html>


    </head>

    <body>
        <div class="container">
            <h1>Contact Us</h1>
            <form action="thank_you.php" method="POST"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>

            <button type="submit">Submit</button><br>
            </form>
        </div>
        
        
        <?php include "partials/footer.php"; ?>

        
