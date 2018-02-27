<?php 
class film {

private $db;

 /*---------------------------------------------------- 
* De constructor
* Als we de klasse film willen gaan gebruiken
* maken we (in init.php) een object variabele aan
 * met behulp van de constructor.
 * Daarna kunnen we gebruik maken van de functies
 * in deze klasse
 -----------------------------------------------------*/
public function __construct($database) {
$this->db = $database;
} 

 
/*---------------------------------------------------- 
* met deze functie krijgen we een overzicht
* van het aantal aanwezige films
-----------------------------------------------------*/
public function aantal_film() {
$query = $this->db->prepare(
"SELECT COUNT(*) 
FROM film"
);
 
try{
$query->execute();
$rows = $query->fetchColumn();
return $rows;
}catch(PDOException $e){
die($e->getMessage());
}
}

}

?>
