<?php session_start(); ?>
<?php
if(isset($_SESSION['p_id'])){

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home-professors</title>
    <link rel="stylesheet" href="../css/logout.css">
    <script type="text/javascript">
    function view_marks(year) {
        if (year == "") {
            document.getElementById("data").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","view_marks.php?year="+year,true);
            xmlhttp.send();
        }
    }

    </script>
  </head>
  <body>
    <div class="logout">
      <a href="../includes/logout.php">Logout</a>
    <div>
    <form class="" method="post">
      <label>Years</label>
      <input type="radio" name="year" value="first" onchange="view_marks(this.value)">First
      <input type="radio" name="year" value="second" onchange="view_marks(this.value)">Second
      <input type="radio" name="year" value="third" onchange="view_marks(this.value)">Third
      <input type="radio" name="year" value="fourth" onchange="view_marks(this.value)">Fourth
    </form>
    <div id="data">

    </div><br>
  </body>
</html>

<?php

}else{
  header("Location: ../index.php?notLogin=notLogin");
}




?>
