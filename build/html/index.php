<html>
  <head>
    <title>Backup Server Control Panel</title>
  </head>
  
  <body>
    <form method="get" action="shutdown.php">
      <input type="submit" value="SHUTDOWN PI" name="shutdown">
      <input type="submit" value="RESTART PI" name="restart">
    </form>
    
    Your current local IP address is
    <?php
      echo $_SERVER['REMOTE_ADDR'];
    ?>
  </body>
</html>
