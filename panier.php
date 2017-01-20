
<?php
session_start();
include("conf/db.php"); 
	$id = htmlspecialchars($_GET["id"]);
	$member_id = htmlspecialchars($_SESSION["id_member"]);
	$request = $db->prepare("INSERT INTO bibliotheque (joueurs_id, jeux_id) VALUES (:joueurs_id, :jeux_id)");
			$request -> execute(
				array(
				'joueurs_id' => $member_id,
				'jeux_id' => $id
				)
			);
	//echo $request->queryString;
	header("Location:bibliotheque.php");
?>