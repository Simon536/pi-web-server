<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Shutting Down...</title>
  </head>
  <body>
    <?php
        if(isset($_GET['shutdown'])){
            echo "Shutting down in one minute...";
            echo "Please wait at least 2 minutes before turning power off!";
            system('sudo /sbin/shutdown -h -P +1');
        }
        else if(isset($_GET['restart'])){
            echo "Restarting in one minute...";
            echo "Please close this tab and wait approximately 3 minutes for restart to complete!";
            system('sudo /sbin/shutdown -r +1');
        }
    ?>
  </body>
</html>

