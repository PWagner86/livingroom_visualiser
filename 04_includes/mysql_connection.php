<?php

// Datenbank verbinden
//DB Verbindung
define("DBSERVER", 'localhost');
define("DBUSER", 'root');
define("DBPASSWORT", '');
define("DBNAME", 'living_room_visualizer');

$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORT, DBNAME) OR die('DB verbindung hat nicht geklappt: '.mysqli_connect_error());

// var_dump($conn);
?>