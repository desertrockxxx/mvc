<?php
    // DSN
    $dsn = "mysql:host=localhost;dbname=mvc";
    $user = "markschuster";
    $pass = "";
    // Ein assoziatives Array daraus machen
    $options = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // Nur für die Entwicklung verwenden (Sendet Fehlermeldungen aus)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    );
try {
    $db = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Fehler bei der Verbindung: " . $e->getMessage() . "!";
}








?>