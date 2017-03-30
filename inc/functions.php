<?php
require_once("inc/dbconfig.php");

function findAllPosts($conn){
    // Query an die Datenbank senden zum auslesen der Blogbeiträge
    $stmt = $conn->query("SELECT beitraege.id, titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autor_id = autoren.id");
    $beitraege = $stmt->fetchAll();

    // Autoren und Kategorien müssen mit ausgelesen werden

    // Autor soll mit Benutzername angezeigt werden
    
}

?>
