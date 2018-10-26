<?php
// Database connection
function __autoload($classname){
  include "../classes/$classname.php";
}

$table = "professors";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //OBJECT FOR VALIDATOR CLASS
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

}

$login = new registration();
$login->login($username, $password, $table);







?>
