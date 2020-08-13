<!doctype html>
<html lang="en">

<head>
  <title>Movie Lists</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <h2>What do you want to see?</h2>
  <hr>
  <br>
  <h3>Choose </h3>
  <form action="movieAction.php" method="post">
    <ul class="list-group">
      <li class="list-inline-item mb-1">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary ">
            <input type="radio" name="movies" id="" autocomplete="off" checked="" value="Avengers"> #1 Avengers
          </label>
        </div>
      </li>
      <li class="list-inline-item mb-1">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary">
            <input type="radio" name="movies" id="" autocomplete="off" value="Harry-Potter"> #2 Harry Potter and the Philosopher's Stone
          </label>
        </div>
      </li>
      <li class="list-inline-item mb-1">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary">
            <input type="radio" name="movies" id="" autocomplete="off" value="Aladdin"> #3 Aladdin
          </label>
        </div>
      </li>
      <li class="list-inline-item mb-1">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary">
            <input type="radio" name="movies" id="" autocomplete="off" value="千と千尋の神隠し"> #4 千と千尋の神隠し
          </label>
        </div>
      </li>
    </ul>


    <br>
    <button type="submit" name="next1">Next</button>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>