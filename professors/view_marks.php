<?php
include '../classes/student.php';
include '../classes/subject.php';
include '../classes/marks.php';

if(isset($_GET['year'])){
  $year = $_GET['year'];
}

$student = new student();
$students = $student->getAllByYear($year);

echo "<table border='1' style='border-collapse:collapse'>";
foreach($students as $stud){
  echo "<tr><th colspan=2>Name: ".ucwords($stud['name'])."</th></tr>";
  $marks = new marks();
  $stud_marks = $marks->getAllByStudId($stud['stud_id']);

  foreach($stud_marks as $mark){
    $subject = new subject();
    echo "<td>".ucwords(str_replace('-',' ',$subject->getSubjectName($mark['sub_id'])))."</td>";
    echo "<td>".$mark['marks']."</td></tr>";
  }
}
echo "</table>";
?>
