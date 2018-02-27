<?php
	require 'core/init.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Princess+Sofia' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/supreme.css" >
<title>filmotheek</title>
</head>

<body>
<div id="container">
	<div id="kop">
		<img class="center" src="Image/header.jpg" style="width:100%;height:120px;" />
	</div>
		<?php
			echo '<div>';
				include "includes/menu.php";
			echo "</div>";

			echo '<div id="sidebar">';
				echo 'Ronald Mcdonalds for president 2020';
			echo '</div>';
			
			echo '<div id="main_sub">';
				echo '<div id="main_L">';
				echo "<div style='overflow: scroll; height: 200px; width: 300px;'>
				        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed 
				        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
				        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
				        iriure dolor in hendrerit in vulputate velit esse molestie consequat,
				        nulla facilisis at vero eros et accumsan et iusto odio dignissim qui 
				        zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
				        eleifend option congue nihil imperdiet doming id quod mazim.</p>
				
				        <p>Typi non habent claritatem insitam; est usus legentis in iis 
				        Investigationes demonstraverunt lectores legere me lius quod ii 
				        processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
				        gothica, quam nunc putamus parum claram, anteposuerit litterarum 
				        seacula quarta decima et quinta decima. Eodem modo typi, qui nunc 
				        fiant sollemnes in futurum. Lorem ipsum dolor sit amet, consectetuer 
				        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
				        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
				        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
				        claritatem. Investigationes demonstraverunt lectores legere me.</p> 
				
				        <a name='anchor-bottom'></a>
				
				        <p>Mirum est notare quam littera gothica, quam nunc putamus parum
				        humanitatis per seacula quarta decima et quinta decima. Eodem modo 
				        clari, fiant sollemnes in futurum.</p>
				    	</div>";	
				echo'</div>';
				echo '<div id="main_M">';
				echo '<ul>';
				echo '<li>';
				$aantalfilm = $film->aantal_film();
				
				if ($aantalfilm > 0) {
					echo "Aantal films ".$aantalfilm;
				}
				else echo "Er zijn geen films in de database.<br>";
				echo '</li>';
				echo '</ul>';
				echo '<img class="center" src="css/wallpapper.png" style="width:30%;height:30%;" />';
				echo '<br>I need healing - Genji';
				echo '<br><br><br><br><br><br><br>';
				echo'</div>';
			echo '</div>';
		?>
 </div>
 </body>
</html>

