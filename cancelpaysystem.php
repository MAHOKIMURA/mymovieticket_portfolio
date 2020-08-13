<?php

include 'movieAction.php';

$paysystemID = $_GET['paysystemID'];

$User->deletePaysystem($paysystemID);

?>