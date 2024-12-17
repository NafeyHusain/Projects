<?php
include 'venders/header.php'
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="index.html"><img id="dsatm" src="https://www.dsatm.edu.in/templates/dsce/images/dsatm_logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <%= typeof page !== 'undefined' && page === 'firms' ? 'active' : '' %>">
        <a href="/firms" class="nav-link"></a>
      </li>
    </ul>
  </div>
</nav>

<?php

require_once 'text.php';
session_start();
$x  = $_SESSION['usn'];

if ($conn) {
  $usn = $_POST['usn'];

  $sql = "SELECT * FROM cocurricular_activities WHERE usn='$x'";
  $result = mysqli_query($conn, $sql);



?>


  <div class="student-info">
    <h1> STUDENT COCURRICULAR ACTIVITIES </h1>
    <br>
    <br>
    <?php if (mysqli_num_rows($result) == 0) { ?>
      <h5 class="alert alert-danger" style="width:700px;">
        <?php echo "CO-CURRICULAR ACTIVITY DATA OF THE STUDENT NOT FOUND "; ?> </h5>


    <?php }

    // // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      $usn = $row["usn"];
      $name = $row["name"];
      $sem = $row["sem"];
      $date = $row["date"];
      $description = $row["description"];
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
          <td><span class="sisub-headings"><b>Semester</b></span></td>
          <td><?php echo ($sem); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Date</b></span></td>
          <td><?php echo ($date); ?></td>

        </tr>
        <tr>
          <td><span class="sisub-headings"><b>Description</b></span></td>
          <td><?php echo ($description); ?></td>

        </tr>
      </table>

  <?php
    }
  }
  ?>
  <?php
  include 'venders/buttons.php'
  ?>

  <?php
  include 'venders/footer.php'

  ?>