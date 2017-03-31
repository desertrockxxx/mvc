<?php 

function findAllPosts($conn){
	//Query an Datenbank senden zum auslesen der Blogbeiträge
	$stmt = $conn->query("SELECT beitraege.ID,  titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.ID");
	$beitraege = $stmt->fetchAll();
	
	//Autoren und Kategorien müssen mit ausgelsen werden
	$stmt = $conn->query("SELECT beitraege.ID, name FROM beitraege INNER JOIN beitrag_kategorie ON beitragid = beitraege.ID INNER JOIN kategorien ON kategorieid = kategorien.ID");
	$kategorien = $stmt->fetchAll();
	foreach($beitraege as $key => $beitrag){
		foreach($kategorien as $kategorie){
			if($kategorie['ID'] == $beitrag['ID']){
				$beitraege[$key]['kategorien'][] = $kategorie['name'];
			}
		}
	}
	//Autor soll mit Benutzername angezeigt werden
	return $beitraege;
}

//Funtion zum auslesen eines einzelnen Beitrags
function findSinglePost($conn, $pid){
	//Query an Datenbank senden zum auslesen des einzelnen Blogbeitrags
	$stmt = $conn->query("SELECT beitraege.ID,  titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.ID WHERE beitraege.ID =" . $pid);
	$singleBeitrag = $stmt->fetchAll();
	
	//Autor und Kategorien für den einzelnen Beitrag auslesen
	$stmt = $conn->query("SELECT beitraege.ID, name FROM beitraege INNER JOIN beitrag_kategorie ON beitragid = beitraege.ID INNER JOIN kategorien ON kategorieid = kategorien.ID WHERE beitraege.ID = " . $pid);
	$kategorien = $stmt->fetchAll();
	foreach($kategorien as $kategorie){	
		$singleBeitrag[0]['kategorien'][] = $kategorie['name'];
	}
	return $singleBeitrag;
}



?>