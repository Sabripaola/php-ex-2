<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $passwordUtente = $_GET["password"];
      if ($passwordUtente == "Boolean"){

    ?>

    <h2 style="color:green;">Password esatta</h2>
    <?php

      } else{
    ?>
      <h2 style="color:red;">Ritenta, password errata</h2>
    <?php } ?>

  </body>
</html>
