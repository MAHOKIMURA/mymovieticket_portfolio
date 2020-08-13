<?php

include 'movieAction.php';

?>

<!doctype html>
<html lang="en">

<head>
  <title>Ticket</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="jumbotron">
    <a href="homepage.php">Go to Homepage</a>
    <a class="mr-2" href="movielists.php">Reserve Movie</a>
    <a href=""></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="con-2">
        <table class="table table-bordered table-info table-hover table-striped mt-5">
          <thead>
            <td colspan="3">Movie</td>
            <td colspan="3">Time</td>
            <td colspan="3">Ticket Fee</td>
            <td colspan="3">Payment</td>
            <td colspan="">Option</td>
          </thead>
          <tbody>
            <?php
            if ($User->displayMovie() == FALSE) {
              echo "<tr>";
              echo "<td colspan = '5'>";
              echo "<div class = 'alert alert-warning'>No added User</div>";
              echo "</td>";
              echo "</tr>";
            } else {
              foreach ($User->displayMovie() as $row) {
                $userID = $row['movieon_id'];
            ?>
                <tr>
                  <td><?php echo $row['movieon_id']; ?></td>
                  <td><?php echo $row['movieName']; ?></td>
                  <td>
                    <a href="changemovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-primary">Update User</a>
                    <br>
                    <a href="cancelmovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-danger">Delete User</a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="con-3">
        <table class="table table-bordered table-success table-hover table-striped mt-5">
          <thead>
            <td colspan="2">Time</td>
            <td colspan="">Option</td>
          </thead>
          <tbody>
            <?php
            if ($User->displayMovieTime() == FALSE) {
              echo "<tr>";
              echo "<td colspan = '5'>";
              echo "<div class = 'alert alert-warning'>No added User</div>";
              echo "</td>";
              echo "</tr>";
            } else {
              foreach ($User->displayMovieTime() as $row) {
                $scheduleID = $row['schedule_id'];
            ?>
                <tr>
                  <td><?php echo $row['schedule_id']; ?></td>
                  <td><?php echo $row['schedule_time']; ?></td>
                  <td>
                    <a href="changemovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-primary">Update User</a>
                    <br>
                    <a href="cancelmovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-danger">Delete User</a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="con-3">
        <table class="table table-bordered table-info table-hover table-striped mt-5">
          <thead>
            <td colspan="2">Ticket Fee</td>
            <td colspan="">Option</td>
          </thead>
          <tbody>
            <?php
            if ($User->displayGeneration() == FALSE) {
              echo "<tr>";
              echo "<td colspan = '5'>";
              echo "<div class = 'alert alert-warning'>No added User</div>";
              echo "</td>";
              echo "</tr>";
            } else {
              foreach ($User->displayGeneration() as $row) {
                $scheduleID = $row['gene_id'];
            ?>
                <tr>
                  <td><?php echo $row['gene_id']; ?></td>
                  <td><?php echo $row['generation_fee']; ?></td>
                  <td>
                    <a href="changemovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-primary">Update User</a>
                    <br>
                    <a href="cancelmovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-danger">Delete User</a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="con-3">
        <table class="table table-bordered table-success table-hover table-striped mt-5">
          <thead>
            <td colspan="2">Payment</td>
            <td colspan="">Option</td>
          </thead>
          <tbody>
            <?php
            if ($User->displayPaysystem() == FALSE) {
              echo "<tr>";
              echo "<td colspan = '5'>";
              echo "<div class = 'alert alert-warning'>No added User</div>";
              echo "</td>";
              echo "</tr>";
            } else {
              foreach ($User->displayPaysystem() as $row) {
                $scheduleID = $row['paysystem_id'];
            ?>
                <tr>
                  <td><?php echo $row['paysystem_id']; ?></td>
                  <td><?php echo $row['payment']; ?></td>
                  <td>
                    <a href="changemovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-primary">Update User</a>
                    <br>
                    <a href="cancelmovie.php?userID=<?php echo $userID ?>" class="btn btn-outline-danger">Delete User</a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>




  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>