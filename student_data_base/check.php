<?php
include 'venders/header.php'
?>

<?php
include 'venders/navbar.php'
?>



<?php

require_once 'text.php';
session_start();
$usn = $_POST['usn'];

$_SESSION['usn'] = $usn;

// echo $_SESSION;
//$usn1= $_SESSION['usn'];


if ($conn) {
  // echo("Hi");÷
  //$usn = $_POST['usn'];

  $sql = "SELECT * FROM student WHERE usn= '$usn'";


  $result = mysqli_query($conn, $sql);



?>

  <div class="student-info">


    <h1> STUDENT DETAILS </h1>
    <br>
    <br>
    <?php if (mysqli_num_rows($result) == 0) { ?>
      <h5 class="alert alert-danger" style="width:700px;">
        <?php echo "USN NOT FOUND "; ?></h5>

    <?php }

    // // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
      $usn = $row["usn"];
      $name = $row["name"];
      $dept_id = $row["dept_id"];
      $phone = $row["phone"];
      $address = $row["address"];
      $email = $row['email'];
      $sem = $row['sem'];
      $batch = $row['batch'];
      $gender = $row['gender'];
    }

    $sql1 = "SELECT * FROM department WHERE  dept_id = $dept_id";


    $result1 = mysqli_query($conn, $sql1);

    while ($row = mysqli_fetch_assoc($result1)) {
      $dept_name = $row["name"];

    ?>
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
          <td><span class="sisub-headings"><b>Department</b></span></td>
          <td><?php echo ($dept_name); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Batch</b></span></td>
          <td><?php echo ($batch); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Semester</b></span></td>
          <td><?php echo ($sem); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Gender</b></span></td>
          <td><?php echo ($gender); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Email</b></span></td>
          <td><?php echo ($email); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Phone</b></span></td>
          <td><?php echo ($phone); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Address</b></span></td>
          <td><?php echo ($address); ?></td>

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

  <?php
  include 'venders/footer.php'
  ?>