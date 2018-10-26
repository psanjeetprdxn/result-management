<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">

      <form class="login" action="login.inc.php" method="post">
        <label>Username: </label>
        <input type="text" name="username" placeholder="Username">
        <?php
        if(isset($_GET['usernameError'])){
          if($_GET['usernameError']=='required'){
            echo 'Username required';
          }
        }
        ?>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <?php
        if(isset($_GET['passwordError'])){
          if($_GET['passwordError']=='required'){
            echo 'Password required';
          }
        }
        ?>
        <input type="submit" value="Login">
        <?php
        if(isset($_GET['loginError'])){
          echo "Username or Password is incorrect";
        }
        ?>
      </form>
    </div>
  </body>
</html>
