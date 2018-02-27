<?php 
	require 'connect/verbinden.php';

	require 'classes/film_class.php';

	$film = new film($db);

	$errors = array();
?>
