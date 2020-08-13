<?php

include 'movieAction.php';

$movieID = $_GET['movieID'];

$User->deleteMovie($movieID);

?>