<?php

$host = "localhost";
$dbName = "steam_tp";
$user = "root";
$password = "";

try
{
	$db = new PDO("mysql:host=".$host.";dbname=".$dbName.";charset=utf8", $user, $password);
}
catch(Expection $e)
{
	die("Erreur : ".$e->getMessage());
}
?>