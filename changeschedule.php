<?php
// include 'movieAction';
// $movieID = $row['movie_id'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Movie Schedule</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="jumbotron">

  </div>
  <div class="container">
  <input type="text" name="scheduleID" id="" value="<?php echo $_GET['scheduleID']?>" placeholder="" class="form-control">
    <h2>When?</h2>
    <ul id="">
      <li class="clearfix">
        
        <ul class="tl">
          <li>

            <p class="screenNumber">SCREEN 1</p>
                    </label>
            <form action="movieAction.php" method="post">
              <label for="">Number</label>
              <ol class="inline-group">
                <li class="list-inline-item">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="showtime" id="" autocomplete="off" checked="" value="9:30~11:30"> 9:30
                    </label>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary ">
                      <input type="radio" name="showtime" id="" autocomplete="off" checked="" value="15:00~17:00"> 15:00
                    </label>               
                     
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary ">
                      <input type="radio" name="showtime" id="" autocomplete="off" checked="" value="20:00~22:00"> 20:00
                    </label>
                    
                  </div>
                </li>
              </ol>
              <button type="submit" name="next2" class="btn btn-primary">Buy ticket</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>