<?php
session_start();
include("conf/db.php"); 
	$id = htmlspecialchars($_GET["id"]);
	$member_id = htmlspecialchars($_SESSION["id_member"]);
	$request = $db->prepare("INSERT INTO amis (joueurs_id, joueurs_id1) VALUES (:id, :joueur_id)");
			$request -> execute(
				array(
				'id' => $member_id,
				'joueur_id' => $id
				)
			);
	//echo $request->queryString;
?>
