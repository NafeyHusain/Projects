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
// $usn = $_POST['usn'];


if ($conn) {

  $sql = "SELECT * FROM result WHERE usn='$x'";
  $result = mysqli_query($conn, $sql);

?>


  <div class="student-info">
    <h1> STUDENT RESULT </h1>
    <br>
    <br>
    <?php if (mysqli_num_rows($result) == 0) { ?>
      <h5 class="alert alert-danger" style="width:700px;">
        <?php echo "RESULT OF THE STUDENT NOT FOUND "; ?> </h5>

    <?php }
    while ($row = mysqli_fetch_assoc($result)) {

      $usn = $row["usn"];
      $name = $row["name"];
      $sem = $row["sem"];
      $SGPA = $row["SGPA"];




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
          <td><span class="sisub-headings"><b>SGPA</b></span></td>
          <td><?php echo ($SGPA); ?></td>

        </tr>
      </table>

  <?php
    }
  }
  ?>

  <br>
  <br>
  <a href="result.php"><button type="button" class="btn btn-danger button-custom-">Result</button></a>
  <a href="cocurricular.php"><button type="button" class="btn btn-primary button-custom-">Cocurricular</button></a>
  <a href="extracurricular.php"><button type="button" class="btn btn-primary button-custom-">Extra-Cocurricular</button></a>




  </div>

  </body>

  <footer id="footer">
    <div class="container">
      <p class="text-muted"><a style="text-decoration: none;color: rgba(237,237,237,0.54);" href="https://www.dsatm.edu.in/index.php/maps-directions">Maps &amp; Direction</a>&nbsp;&nbsp;|&nbsp;&nbsp;&copy; DSATM P I 2020&nbsp;&nbsp;|&nbsp;&nbsp;<a style="text-decoration: none;color: rgba(237,237,237,0.54);;" href="https://www.dsatm.edu.in/index.php/terms-of-use">Terms of Use</a></p>
    </div>
  </footer>
  <!-- Bootstrap and its dependencies -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom JS for search feature -->
  <script src="/scripts/search.js" async defer></script>

  </html>