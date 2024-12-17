<?php
include 'venders/header.php'
?>

<?php
include 'venders/navbar.php'
?>

<?php

require_once 'text.php';
session_start();
$x  = $_SESSION['usn'];

if ($conn) {
  $usn = $_POST['usn'];

  $sql = "SELECT * FROM extra_curricular_activities WHERE usn='$x'";
  $result = mysqli_query($conn, $sql);



?>


  <div class="student-info">
    <h1> STUDENT EXTRA-CURRICULAR ACTIVITIES </h1>
    <br>
    <br>
    <?php if (mysqli_num_rows($result) == 0) { ?>
      <h5 class="alert alert-danger" style="width:700px;">
        <?php echo "EXTRA CURRICULAR ACTIVITY DATA OF THE STUDENT NOT FOUND "; ?></h5>

    <?php }
    // // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      $usn = $row["usn"];
      $name = $row["name"];
      $sem = $row["sem"];
      $date = $row["date"];
      $content = $row["content"]; ?>
      <table style="width:65%;">
        <tr>
          <td><span class="sisub-headings"><b>USN</b></span></td>
          <td> <?php echo ($usn); ?></td>
        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Name</b></span></td>
          <td><?php echo ($name); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Semester</b></span></td>
          <td><?php echo ($sem); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Date</b></span></td>
          <td><?php echo ($date); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Description</b></span></td>
          <td><?php echo ($content); ?></td>

        </tr>
      </table>
  <?php
    }
  }
  ?>




  <?php
  include 'venders/buttons.php'
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <?php
  include 'venders/footer.php'
  ?>