<?php

include 'classes/User.movie.php';
$User = new User;

// if(isset($_POST['decidemovie'])){
  
//   $movies = $_POST['movie'];
//   $showtime = $_POST['show_time'];
//   $fee = $_POST['tFee'];
//   $payment = $_POST['payments'];


//   $User->addMovies($movies,$showtime,$fee,$payment);

if(isset($_POST['changereserve'])){
  $movies = $_POST['movies'];
  $showtime = $_POST['showtime'];
  
  $fee = $_POST['fee'];
  $payment = $_POST['payment'];
  $movieID = $_POST['movieID'];

  $User->changeMovie($movies,$showtime,$fee,$payment,$movieID);
  
}elseif(isset($_POST['register'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $fullname=$_POST['fullname'];
  $password=$_POST['password'];


  $User->registerUser($fname,$lname,$fullname,$password);

}elseif(isset($_POST['login'])){
  $username = $_POST['fullname'];
  $password = $_POST['password'];

  $User->login($username,$password);

}elseif(isset($_POST['payticket'])){
  $cardname = $_POST['cardname'];
  $account = $_POST['account'];

    $User->PayforTicket($cardname,$account); 

}elseif(isset($_POST['next1'])){
  $movies = $_POST['movies'];
  //  header('location:schedule.php');
  $User->selectMovie($movies);
}elseif(isset($_POST['next2'])){
  $movietime = $_POST['showtime'];

  $User->selectMovieTime($movietime);
}elseif(isset($_POST['next3'])){
  $fee = $_POST['fee'];
  // header('location:generation.php');
  $User->selectGeneration($fee);
}elseif(isset($_POST['next4'])){
  $payment = $_POST['payment'];

  $User->howtoPay($payment);
}


?>