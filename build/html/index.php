<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Raspberry Pi Server Control Panel</title>
  </head>
  <body>
    <form method="get" action="shutdown.php">
        <input type="submit" value="SHUTDOWN PI" name="shutdown">
        <input type="submit" value="RESTART PI" name="restart">
    </form>

    Your current local IP address is:
    <?php
        echo $_SERVER['REMOTE_ADDR'];
    ?>
    <p>
    <a href="//<?php print $_SERVER['SERVER_NAME']; ?>:8081">Big Bash Stats</a>
  </body>
</html>
