<?php

include 'movieAction.php';

?>

<!doctype html>
<html lang="en">

<head>
  <title>Your Reservation</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="jumbotron">
    <a href="homepage.php">Go to Homepage</a>
    <a class="mr-2" href="movielists.php" >Reserve Movie</a>
    <a href=""></a>
  </div>
  <?php
  if ($User->Displayreservation() == FALSE) {
    echo "<li class='list-group-item bg-dark'>NO MOVIES</li>";
  } else {
    foreach ($User->Displayreservation() as $row) {
      $movieID = $row['movie_id'];
  ?>
      <div class="container">
        <div class="card  w-50 mt-3 float-lg-left">
          <div class="card-header" style="background-color: orange;">
            <h3>You are going to see</h3>
            <br>
            <ul class="list-inline">
              <li class="list-inline-item">breakfast = 9:30am-11:40am</li>
              <li class="list-inline-item">lunch = 12:10pm-2:20pm</li>
              <li class="list-inline-item">ahternoontea = 2:50pm-5:00pm</li>
              <li class="list-inline-item">dinner = 5:30pm-7:40pm</li>
              <li class="list-inline-item">lateshow = 8:10pm-10:20pm</li>
            </ul>
            <ul class="list-inline">
              <li class="list-inline-item">adults: $18</li>
              <li class="list-inline-item">unistudents: $15</li>
              <li class="list-inline-item">children/students: $10</li>
              <li class="list-inline-item">elderly: $12</li>
              <li class="list-inline-item">lateshow: $14</li>
            </ul>
          </div>
          <div class="card-body">
            <ul class="list-group list-unstyled">
              <li class="list-group-item bg-info">No. <?php echo $movieID; ?></li>
              <li class="list-group-item bg-light">Movie: <?php echo $row['movie_name'] ?></li>
              <li class="list-group-item bg-light">Time: <?php echo $row['movie_time']; ?></li>
              <!-- <li class="list-group-item">How many?: <?php echo $row['tickets']; ?></li> -->
              <li class="list-group-item bg-light">You are: <?php echo $row['ticket_fee']; ?></li>
              <li class="list-group-item bg-light">How to pay: <?php echo $row['payment']; ?></li>
              <li class="list-group-item bg-light text-center"><a href="changemovie.php?movieID=<?php echo $movieID ?>" class="btn btn-outline-warning  mr-3">Change Your Movie</a><a href="cancelmovie.php?movieID=<?php echo $movieID ?>" class="btn btn-outline-danger">Cancel Your Movie</a></li>
            </ul>
          </div>
        </div>
      </div>
  <?php
    }
  }
  ?>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>