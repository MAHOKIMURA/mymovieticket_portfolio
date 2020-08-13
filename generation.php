<?php
// include 'movieAction';
// $movieID = $row['movie_id'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Generation</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2>Ticket Fee</h2>
    <form action="movieAction.php" method="post">
    <label for="">Which?</label>
      <ul class="list-group">
        <li class="list-inline-item mb-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons"> 
          <label class="btn btn-secondary"> 
            <input type="radio" name="fee" id="" autocomplete="off" checked="" value="UniStudents $18"> Adalts $18
          </label>
          </div>
        </li>
        <li class="list-inline-item mb-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary ">
              <input type="radio" name="fee" id="" autocomplete="off" checked="" value="UniStudents $15"> UniStudents $15
            </label>
          </div>
        </li>
        <li class="list-inline-item mb-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary ">
              <input type="radio" name="fee" id="" autocomplete="off" checked="" value="Children/Students $10"> Children/Students $10
            </label>
          </div>
        </li>
        <li class="list-inline-item mb-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary ">
              <input type="radio" name="fee" id="" autocomplete="off" checked="" value="Elderys $12"> Elderys $12
            </label>
          </div>
        </li>
        <li class="list-inline-item mb-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary ">
              <input type="radio" name="fee" id="" autocomplete="off" checked="" value="Lateshow $14"> Lateshow $14
            </label>
          </div>
        </li>
      </ul>
      <br>
      <button type="submit" name="next3">Next</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>