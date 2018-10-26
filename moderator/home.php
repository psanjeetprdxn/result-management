<?php session_start(); ?>
<?php
if(isset($_SESSION['m_id'])){
?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <link rel="stylesheet" href="../css/logout.css">
      <!-- <script type="text/javascript" src="subjects.js"></script> -->
      <script type="text/javascript">
      function get_subjects(year) {
          if (year == "") {
              document.getElementById("sub").innerHTML = "";
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
                      document.getElementById("sub").innerHTML = this.responseText;
                  }
              };
              xmlhttp.open("GET","get_subjects.php?year="+year,true);
              xmlhttp.send();
          }
      }

      </script>
      <meta charset="utf-8">
      <title>home page</title>
    </head>
    <body>

      <?php
        //require '../includes/dbc.php';

        ?>
        <div class="logout">
          <a href="../includes/logout.php">Logout</a>
        <div>
        <form action="add_subjects.php" method="post">
          <label>Name: </label>
          <input type="text" name="name" placeholder="Name">
          <?php
          if(isset($_GET['nameError'])){
            if($_GET['nameError'] == 'required'){
              echo 'Name is required';
            }
          }
          ?>
          <br>
          <label>Year: </label>
          <?php
          if(isset($_GET['yearError'])){
            if($_GET['yearError'] == 'required'){
              echo 'Year is required';
            }
          }
          ?>
          <br>
          <input type="radio" name="year" value="first" onchange="get_subjects(this.value)"> First Year<br>
          <input type="radio" name="year" value="second" onchange="get_subjects(this.value)"> Second Year<br>
          <input type="radio" name="year" value="third" onchange="get_subjects(this.value)"> Third Year<br>
          <input type="radio" name="year" value="fourth" onchange="get_subjects(this.value)"> Fourth Year<br>
          <div class="">

          <div id="sub"></div>
          <input type="submit" value="Enter the marks">
          <?php
          if(isset($_GET['marksInvalid'])){
            if($_GET['marksInvalid']=='true'){
              echo 'Please enter valid marks';
            }
          }
          if(isset($_GET['marksAdded'])){
            echo "Marks added successfully";
          }
          if(isset($_GET['marksNotAdded'])){
            echo "Marks not added";
          }

         ?>
        </form>

        <?php

      }else{
        header("Location: ../index.php?notLogin=notLogin");
      }

      ?>
    </body>
  </html>
