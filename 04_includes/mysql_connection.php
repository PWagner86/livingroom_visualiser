<?php

/*
-------------------------------------------------------------------------------------->
Hier findet die Datanbank-
Verbindung statt.
-------------------------------------------------------------------------------------->
*/

define("DBSERVER", 'localhost');
define("DBUSER", 'root');
define("DBPASSWORT", '');
define("DBNAME", 'living_room_visualizer');

$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORT, DBNAME) OR die('DB verbindung hat nicht geklappt: '.mysqli_connect_error());

// var_dump($conn);

/*
-------------------------------------------------------------------------------------->
Diese Funktion "desifiziert"
User-Input und macht ihn sicher
für die Datenbank.
-------------------------------------------------------------------------------------->
*/

$sanitize = array(
    'string' => FILTER_SANITIZE_STRING,
    'int' => FILTER_VALIDATE_INT,
    'float' => FILTER_SANITIZE_NUMBER_FLOAT,
    'email' => FILTER_VALIDATE_EMAIL
);

function sanitizing($var, $sani){
    global $sanitize;

    $var = htmlspecialchars($var);
    $var = strip_tags($var);
    $var = filter_var($var, $sanitize[$sani]);
    return $var;
}

?>