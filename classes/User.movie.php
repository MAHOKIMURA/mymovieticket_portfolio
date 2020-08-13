<?php

include 'Database.movie.php';

class User extends Database{
  public function registerUser($fname,$lname,$fullname,$password){
    $sql = "INSERT INTO loginmovies(fullname,password)VALUE('$fullname','$password')";
    $queryResult = $this->conn->query($sql);

    
    if($queryResult == TRUE){

        $loginID = $this->conn->insert_id;
        $sql2 = "INSERT INTO register(fname,lname,login_id)VALUE('$fname','$lname','$loginID')";
        $result2 = $this->conn->query($sql2);

        if($result2 == FALSE){
            echo "error in second query";
        }else{
            header('location:loginM.php');
        }      
    }else{
        return "error in first query";
    }
  }

  public function login($username,$password){
    $sql = "SELECT * FROM loginmovies INNER JOIN register ON loginmovies.login_id = register.login_id WHERE loginmovies.fullname = '$username' AND loginmovies.password = '$password'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['register'] = $row['user_id'];
        

        if($row['login_status'] == 'U'){
            header('location:homepage.php');

        }else{
            header('location:admin.php');
            // echo "not user";
        }

    }else{
        echo "no such user";
    }
  } 

  public function getloggedInUser($session_name){
    $sql = "SELECT * FROM register WHERE user_id = '$session_name'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      return $result->fetch_assoc();
    }else{
      return FALSE;
    }
  }

  // public function addMovies($moviename,$movietime,$fee,$payment){
  //   $sql = "INSERT INTO movie_ticket(movie_name, movie_time, ticket_fee, payment) VALUES ('$moviename','$movietime','$fee','$payment')";
  //   $result = $this->conn->query($sql);

  //   if($result == TRUE){
  //     header('location:reservedmovie.php');
      
  //   }else{
  //     echo "error in adding movie";
  //   }
  // }

   public function selectMovie($mName){
    $sql = "INSERT INTO movie_on(movieName) VALUE ('$mName')";
    $result = $this->conn->query($sql);
    
    if($result == TRUE){
      header('location:schedule.php');
    }else{
      echo "error select movie";
    }
  }

  public function DisplayMovie(){
    $sql = "SELECT * FROM movie_on";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  public function deleteMovie($movieID){
      $sql = "DELETE FROM movie_on WHERE movie_id ='$movieID'";
      $result = $this->conn->query($sql);
  
      if($result == TRUE){
        header('location:ticket.php');
      }else{
        return FALSE;
      }
    }

    public function changeMovie($moviename,$movieID){
      $sql = "UPDATE movie_on SET movieName='$moviename' WHERE movie_id='$movieID'";
      $result = $this->conn->query($sql);
  
      if($result == TRUE){
        header('location:ticket.php');
      }else{
        echo "error changing movie";
      }
    }

  public function selectMovieTime($mTime){
    $sql = "INSERT INTO schedule(schedule_time) VALUE ('$mTime') ";
    $result = $this->conn->query($sql);
    
    if($result == TRUE){
      header('location:generation.php');
    }else{
      echo "error select movie";
    }
  }

  public function DisplayMovieTime(){
    $sql = "SELECT * FROM schedule";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  

  public function selectGeneration($fee){
    $sql = "INSERT INTO genefee(generation_fee) VALUE ('$fee')";
    $result = $this->conn->query($sql);
  
    if($result == TRUE){
      header('location:payfor.php');
    }else{
      echo "error select movie";
    }
  }

  public function DisplayGeneration(){
    $sql = "SELECT * FROM genefee";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  public function howtoPay($pay){
    $sql = "INSERT INTO pay_system(payment) VALUE ('$pay')";
    $result = $this->conn->query($sql);
  
    if($result == TRUE){
    //   if($pay == 'card'){
    //     header('location:payment.php');
    //   }else{
        header('location:ticket.php');
      // }
    }else{
      echo "error select movie";
    }
  }

  public function DisplayPaysystem(){
    $sql = "SELECT * FROM pay_system";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  public function Paylink($cardname,$account,$payment){
    $sql = "INSERT INTO cardpay('card_name','bank_account')VALUE($cardname,$account)";
    $queryResult = $this->conn->query($sql);

    if($queryResult == TRUE){
      $cardID = $this->conn->insert_id;
      $sql2 = "INSERT INTO pay_system(payment,card_id)VALUE('$payment','$cardID')";
      $result2 = $this->conn->query($sql2);

      if($result2 == FALSE){
        echo "error in second query";
      }else{
        header('location:payment.php');
      }
    }else{
      return "error in first query";
    }
  }

  public function payforTicket($cardname,$bankaccount){
     $sql = "SELECT * FROM cardpay INNER JOIN pay_system ON cardpay.card_id = pay_system.card_id WHERE cardpay.card_name = '$cardname' AND cardpay.bank_account = '$bankaccount'";
     $result = $this->conn->query($sql);

     if($result == TRUE){
       header('location:ticket.php');
     }else{
       echo "error paying";
     }
   }
  
  public function finishPay($session_name){
    $sql = "SELECT * FROM pay_system WHERE payment_id = '$session_name'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      return $result->fetch_assoc();
    }else{
      return FALSE;
    }
  }

  public function Displayreservation(){
    $sql = "SELECT * FROM movie_ticket";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  // public function deleteMovie($movieID){
  //   $sql = "DELETE FROM movie_ticket WHERE movie_id = '$movieID'";
  //   $result = $this->conn->query($sql);

  //   if($result == TRUE){
  //     header('location:reservedmovie.php');
  //   }else{
  //     return FALSE;
  //   }
  // }

  // public function changeMovie($moviename,$movietime,$ticketfee,$payment,$movieID){
  //   $sql = "UPDATE movie_ticket SET movie_name='$moviename',movie_time='$movietime',ticket_fee='$ticketfee',payment='$payment' WHERE movie_id='$movieID'";
  //   $result = $this->conn->query($sql);

  //   if($result == TRUE){
  //     header('location:reservedmovie.php');
  //   }else{
  //     echo "error changing movie";
  //   }
  // }

  

  

}

?>