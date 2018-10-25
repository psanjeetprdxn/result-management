<?php

class marks extends dbConnection {
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
                             WILL ADD DATA INTO MARKS TABLE
  ********************************************************************************************
  */
  public function addMarks(int $stud_id, int $sub_id, int $marks){
    $added = false;
    $query = "INSERT into marks values(?, ?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$stud_id, $sub_id, $marks]);
    if($result){
      $added = true;
    }
    return $added;
  }

  // /*
  // ********************************************************************************************
  //             WILL display marks of all the student of the particular year
  // ********************************************************************************************
  // */
  // public function viewMarks(string $year){
  //   $added = false;
  //   $query = "INSERT into marks values(?, ?, ?)";
  //   $stmt = $this->conn->prepare($query);
  //   $stmt->execute([$stud_id, $sub_id, $marks]);
  //   if($result){
  //     $added = true;
  //   }
  //   return $added;
  // }

  /*
  ********************************************************************************************
            WILL RETURN SUBJECT ID AND MARKS OF THAT PARTICULAR STUDENT
  ********************************************************************************************
  */
  public function getAllByStudId(int $stud_id){
    $rows = array();
    $sql = "SELECT sub_id, marks from marks where stud_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$stud_id]);
    $rows = $stmt->fetchAll();
    return $rows;


  }

}

?>
