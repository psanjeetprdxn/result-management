<?php
session_start();
class registration extends dbConnection {
  protected $conn;

  /*
  ********************************************************************************************
  CONSTRUCTOR-> AUTOMATIC DATABASE CONNECTION
  ********************************************************************************************
  */
  public function __construct(){
    $dbConnection = new dbConnection();
    $this->conn = $dbConnection->connect();
  }

  /*
  ********************************************************************************************
                        Login function for both moderators and professors
  ********************************************************************************************
  */
  public function login($username, $password, $table){
    $login = "SELECT * from $table where username = ? and password = ?";
    $stmt = $this->conn->prepare($login);
    $stmt->execute([$username, $password]);
    $count = $stmt->rowCount();
    if($count > 0){
      $row = $stmt->fetch();
        if($table == 'moderator'){
          $_SESSION['m_id'] = $row['m_id'];
        }else{
          $_SESSION['p_id'] = $row['p_id'];
        }
        header('Location: home.php');
      }else{
        header('Location: login.php?loginError=invalid');
      }
    }

}

?>
