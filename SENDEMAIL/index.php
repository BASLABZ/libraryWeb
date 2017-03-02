<?php
    include 'config/config.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library For Send Email</title>
  </head>
  <body>
        <?php
            $id = 8;
            $ency = base64_encode($id);
            echo "<a href='sendEmailDebug.php?id=".$ency."'>Send Email Now</a>";
         ?>

  </body>
</html>
