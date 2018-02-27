<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>

</body>
</html>

	      echo '<div>';
	      include "includes/menu.php";
	      echo "</div>";

	      echo '<ul>';
	      echo '<li>';
	      $aantalfilm = $film->aantal_film();
	      if ($aantalfilm > 0) {
	        echo "Aantal films ".$aantalfilm;
	      }
	      else echo "Er zijn geen films in de database.<br>";
	      echo '</li>';
	      echo '</ul>';
	 
