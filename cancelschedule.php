<?php

include 'movieAction.php';

$scheduleID = $_GET['scheduleID'];

$User->deleteMovieTime($scheduleID);

?>