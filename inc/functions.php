<?php
require_once("inc/dbconfig.php");

function findAllPosts($conn){
    // Query an die Datenbank senden zum auslesen der Blogbeiträge
    $stmt = $conn->query("SELECT beitraege.id, titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.id");
    $beitraege = $stmt->fetchAll();

    // Autoren und Kategorien müssen mit ausgelesen werden
    $stmt = $conn->query("SELECT beitraege.id, name FROM beitraege INNER JOIN beitrag_kategorie ON beitragid = beitraege.id INNER JOIN kategorien ON kategorieid = kategorien.id");
    $kategorien = $stmt->fetchAll();
    foreach($beitraege as $key => $beitrag){
        foreach($kategorien as $kategorie){
            if($kategorie['id'] == $beitrag['id']){
                $beitraege[$key]['kategorien'][] = $kategorie['name'];
            }
        }
    }
    
    // Autor soll mit Benutzername angezeigt werden
    return $beitraege;
    
    
// Funktion zum auslesen eines einzelnen Beitrages    
function findSinglePost($conn, $pid){
    // Query an die Datenbank senden zum auslesen eines einzelnen Blogbeitrages
    $stmt = $conn->query("SELECT beitraege.id, titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.id WHERE beitraege.id = " . $pid);
    $singleBeitrag = $stmt->fetchAll();
    
    // Autoren und Kategorien für den einzelnen Beitrag auslesen
    $stmt = $conn->query("SELECT beitraege.id, name FROM beitraege INNER JOIN beispiel_kategorie ON beitragid = beitraege.id WHERE beitraege.id INNER JOIN kategorieid ON kategorien.id WHERE beitraege.id = " . $pid);
    $kategorien = $stmt->fetchAll();
    
    foreach($kategorien as $kategorie){
        $singleBeitrag[0]['kategorien'][] = $kategorie['name'];
    }
    
}    

    
    
}

?>
