<?php
$server = "localhost";
$user = "root";
$password = "";
$mysql_db = "kosmos";
$mysqli = new mysqli($server, $user, $password, $mysql_db);
if ($mysqli->connect_errno) {
    echo "Konekcija neuspešna: $mysqli->connect_error \n";
    exit();
}
$mysqli->set_charset("utf8");
