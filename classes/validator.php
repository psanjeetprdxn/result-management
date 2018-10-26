<?php
// function __autoload($classname){
//   include "$classname.php";
// }
//include 'dbConnection.php';
class validator extends dbConnection {
  protected $conn;

  public function __construct(){
    $dbConnection = new dbConnection();
    $this->conn = $dbConnection->connect();
  }

  public function validateUsername($value){
    $output = false;
    if(!empty($value)){
      mysqli_real_escape_string($this->conn, $value);
      $output = true;
    }
    return $output;
  }

  public function validatePassword($value){
    $output = false;
    if(!empty($value)){
      mysqli_real_escape_string($this->conn, $value);
      $output = true;
    }
    return $output;
  }

  public function validateName($value){
    $output = false;
    $string = preg_replace('/[^a-z]/i', '', $value);
    if(!empty($string)){
      mysqli_real_escape_string($this->conn, $string);
      $output = true;
    }
    return $output;
  }

  public function validateYear($value){
    $output = false;
    if(!empty($value)){
      if($value == 'first' or $value == 'second' or $value == 'third' or $value == 'fourth'){
        mysqli_real_escape_string($this->conn, $value);
        $output = true;
      }
    }
    return $output;
  }

  public function validateMarks($value){
    $min = 0;
    $max = 100;
    $output = false;
    if(!empty($value)){
      if(filter_var($value, FILTER_VALIDATE_INT, array('options' => array(
                                                                  'min_range' => $min,
                                                                  'max_range' => $max
                                                                )))){
        $output = true;
      }
    }
    return $output;
  }

}

?>
