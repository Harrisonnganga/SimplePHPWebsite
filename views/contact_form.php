<?php
?>
<form method="POST" action="process_contact_form.php">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br>
  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea><br>
  <button type="submit">Submit</button><br>
</form>