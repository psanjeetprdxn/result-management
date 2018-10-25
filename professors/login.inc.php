<?php
// Database connection
function __autoload($classname){
  include "../classes/$classname.php";
}

$table = "professors";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //Username validation
  if(!empty($_POST['username'])){
    $username = $_POST['username'];
  }else{
    header('Location: login.php?usernameError=required');
  }
  //Password validation
  if(!empty($_POST['password'])){
    $password= $_POST['password'];
  }else{
    header('Location: login.php?passwordError=required');
  }
}

$login = new registration();
$login->login($username, $password, $table);







?>
