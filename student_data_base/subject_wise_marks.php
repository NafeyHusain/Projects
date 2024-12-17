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

      $sql = "SELECT * FROM subject_marks WHERE usn='$x'";
      $result = mysqli_query($conn, $sql);



?>


      <div class="student-info">
            <h1> Subject Wise Marks </h1>
            <br>
            <br>
            <?php if (mysqli_num_rows($result) == 0) { ?>
                  <h5 class="alert alert-danger" style="width:700px;">
                        <?php echo "MARKS ARE NOT ENTERED YET"; ?> </h5>


            <?php }

            // // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                  $usn = $row["usn"];
                  $subject1 = $row["Subject1"];
                  $subject2 = $row["Subject2"];
                  $subject3 = $row["Subject3"];
                  $subject4 = $row["Subject4"];
                  $subject5 = $row["Subject5"];
                  $subject6 = $row["Subject6"];

            ?>

                  <table style="width:65%;">
                        <tr>
                              <td><span class="sisub-headings"><b>USN</b></span></td>
                              <td> <?php echo ($usn); ?></td>
                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject1</b></span></td>
                              <td><?php echo ($subject1); ?></td>

                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject2</b></span></td>
                              <td><?php echo ($subject2); ?></td>

                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject3</b></span></td>
                              <td><?php echo ($subject3); ?></td>

                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject4</b></span></td>
                              <td><?php echo ($subject4); ?></td>

                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject5</b></span></td>
                              <td><?php echo ($subject5); ?></td>

                        </tr>
                        <tr>
                              <td><span class="sisub-headings"><b>Subject6</b></span></td>
                              <td><?php echo ($subject6); ?></td>

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