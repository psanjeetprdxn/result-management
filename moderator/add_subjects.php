<?php
// function __autoload($classname){
//   include "../classes/$classname.php";
// }
include "../classes/student.php";
include "../classes/subject.php";
include "../classes/marks.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //name validation
  if(!empty($_POST['name'])){
    $name = $_POST['name'];
  }else{
    header('Location: login.php?usernameError=required');
  }
  //year validation
  if(!empty($_POST['year'])){
    $year= $_POST['year'];
  }else{
    header('Location: login.php?passwordError=required');
  }

  //creating student object of class student
  $student = new student();
  $stud_id = $student->addStudent($name, $year);

  //creating subject object of class subject
  $subject = new subject();
  $subjects = array();
  $subjects = $subject->getSubjects($year);

  //creating marks objects of class marks
  $marks = new marks();

  foreach($subjects as $value){
    if(isset($_POST[$value])){
      $sub = new subject();
      if(!$marks->addMarks($stud_id, $sub->getSubId($value), $_POST[$value])){
        header("Location:home.php?marksNotAdded=true");
      }
    }
  }
}
header("Location:home.php?marksAdded=true");

?>
