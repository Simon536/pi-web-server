<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Shutting Down...</title>
  </head>
  <body>
    <?php
        if(isset($_GET['shutdown'])){
            echo "Shutting down...";
            echo "Please wait at least 1 minute before turning power off!";
            system('/sbin/shutdown -P +1');
        }
        else if(isset($_GET['restart'])){
            echo "Restarting...";
            echo "Please close this tab and wait for restart to complete!";
            system('/sbin/shutdown -r +1');
        }
    ?>
  </body>
</html>

