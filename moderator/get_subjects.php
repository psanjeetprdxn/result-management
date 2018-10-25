<?php
function __autoload($classname){
  include "../classes/$classname.php";
}

if(isset($_GET['year'])){
  $year = $_GET['year'];
}

$subject = new subject();
$subjects = $subject->getSubjects($year);
foreach($subjects as $sub){
  ?>
  <label><?php echo ucwords(str_replace('-',' ', $sub)) ?></label>
  <input type="number" name="<?php echo $sub ?>" placeholder="<?php echo ucwords(str_replace('-',' ', $sub )) ?>">
  <br>
  <?php
}
?>
