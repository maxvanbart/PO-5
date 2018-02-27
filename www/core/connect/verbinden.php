<?php

	// Maken van verbinding

	$db = new PDO("sqlite:../data/films.sqlite");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

