<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Ruia College</title>
  </head>
  <body>
    <div class="container">
      <a href="moderator/login.php">Moderator Login</a>
      <a href="professors/login.php">Professors Login</a>
      <?php
      if(isset($_GET['notLogin'])){
        echo "You must be login to use that page";
      }
      ?>
    </div>
  </body>
</html>
