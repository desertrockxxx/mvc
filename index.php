<?php
require_once("inc/dbconfig.php");
require_once("inc/functions.php");

// Abfrage welcher View geladen werden soll
$view = isset($_GET['aktion']) ? $_GET['aktion'] : null;

switch($view) {
    case 'single':
        // Einzelansicht eines Beitrages
    break;
    
    case 'add':
        // Hinzufügen eines Beitrages
    break;
    
    case 'delete':
        // Löschen eines Beitrages
    break;
    
    case 'edit':
        // Editieren eines Beitrages
    break;
    
    default:
        // Standardansicht wird geladen
        $results = findAllPosts($db);
        
        // Query an DB für auslesen aller Blogbeiträge
        $view = "index";
    break;
}

require_once("/views/" . $view . ".tpl.php");


?>
