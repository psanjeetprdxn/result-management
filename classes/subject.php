<?php

class subject extends dbConnection {
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
              RETURNS SUBJECTS IN THE FORM OF ARRAY() FOR THAT PARTICULAR YEAR
  ********************************************************************************************
  */
  public function getSubjects(string $year){
    $query = "SELECT sub_name from subjects where year = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$year]);
    $rows = $stmt->fetchAll();
    $subjects = array();
    foreach ($rows as $row) {
      array_push($subjects, $row['sub_name']);
    }

    return $subjects;
  }

  /*
  ********************************************************************************************
                RETURNS SUBJECTS ID FOR THAT PARTICULAR SUBJECT NAME
  ********************************************************************************************
  */
  public function getSubId($sub_name){
    $query = "SELECT sub_id from subjects where sub_name = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$sub_name]);
    $row = $stmt->fetch();
    return $row['sub_id'];
  }

  /*
  ********************************************************************************************
                RETURNS SUBJECTS NAME FOR THAT PARTICULAR SUBJECT ID
  ********************************************************************************************
  */
  public function getSubjectName($sub_id){
    $sub_name = "";
    $query = "SELECT sub_name from subjects where sub_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$sub_id]);
    $row = $stmt->fetch();
    $sub_name = $row['sub_name'];
    return $sub_name;
  }

}

?>
