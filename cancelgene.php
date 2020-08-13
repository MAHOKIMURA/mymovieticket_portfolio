<?php

include 'movieAction.php';

$geneID = $_GET['geneID'];

$User->deleteGeneration($geneID);

?>