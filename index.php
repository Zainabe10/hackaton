<?php

include_once('hack.php');
include_once('bdd.php');
include_once('index.html');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}


    $monapp = new hack();
	
	$monapp -> afficherPage($page);
	
	
	
?>