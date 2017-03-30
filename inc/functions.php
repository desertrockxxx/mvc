<?php 

function findAllPosts($conn){
	//Query an Datenbank senden zum auslesen der Blogbeiträge
	$stmt = $conn->query("SELECT beitraege.ID,  titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.ID");
	$beitraege = $stmt->fetchAll();
	
	//Autoren und Kategorien müssen mit ausgelsen werden
	
	//Autor soll mit Benutzername angezeigt werden

	
	return $beitraege;
}


?>