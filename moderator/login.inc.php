<?php

function __autoload($classname){
  include "../classes/$classname.php";
}

$table = "moderator";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //OBJECT OF VALIDATOR CLASS
  $validator = new validator();

  //Username validation
  if($validator->validateUsername($_POST['username'])){
    $username = $_POST['username'];
  }else{
    header('Location: login.php?usernameError=required');
    return;
  }

  //Password validation
  if($validator->validatePassword($_POST['password'])){
    $password = $_POST['password'];
  }else{
    header('Location: login.php?passwordError=required');
    return;
  }

}//END OF IF

//login for moderator and redirecting to moderator/home.php
$login = new registration();
$login->login($username, $password, $table);

?>
