</body>
<footer>
  <p>&copy; <?php echo date('Y'); ?> SimplePHPWebsite. All rights reserved.</p>
  <nav>
    <ul>
      <?php
      $headerItems = ['Home', 'About', 'Contact',  'Thanks'];
      foreach ($headerItems as $headerItem) {
        echo '<li><a href="' . strtolower($headerItem) . '.php">' . $headerItem . '</a></li>';
      }
      ?>
    </ul>
  </nav>
</footer>
</html>
