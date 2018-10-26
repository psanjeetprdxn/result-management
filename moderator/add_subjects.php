<?php
function __autoload($classname){
  include "../classes/$classname.php";
}
// include "../classes/student.php";
// include "../classes/subject.php";
// include "../classes/marks.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //OBJECT OF VALIDATOR CLASS
  $validator = new validator();

  //NAME VALIDATION
  if($validator->validateName($_POST['name'])){
    $name = $_POST['name'];
  }else{
    header('Location: home.php?nameError=required');
    return;
  }
  //year validation
  if($validator->validateYear($_POST['year'])){
    $year = $_POST['year'];
  }else{
    header('Location: home.php?yearError=required');
    return;
  }

  //creating student object of class student
  $student = new student();
  //creating subject object of class subject
  $subject = new subject();
  $subjects = array();
  $subjects = $subject->getSubjects($year);

  $marksValidator = false;
  //VALIDATING MARKS
  foreach($subjects as $value){
    if(!$validator->validateMarks($_POST[$value])){
      header("Location: home.php?marksInvalid=true");
      return;
    }else{
      $marksValidator = true;
    }
  }

  //ADDING STUDENT TO STUDENT TABLE
  $stud_id = $student->addStudent($name, $year);




  //creating marks objects of class marks
  $marks = new marks();


//ADDING MARKS TO MARKS TABLE
  if($marksValidator){
    foreach($subjects as $value){
      $sub = new subject();
      if(!$marks->addMarks($stud_id, $sub->getSubId($value), $_POST[$value])){
        header("Location:home.php?marksNotAdded=true");
      }
    }
  }
}
header("Location:home.php?marksAdded=true");

?>
