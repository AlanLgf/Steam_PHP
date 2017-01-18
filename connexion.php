<?php session_start(); ?>
<?php include("conf/db.php"); ?>
<form action="connexion_php.php" method="post">
	<label for="pseudo">Pseudo :</label><input id="pseudo" name="pseudo" type="text" placeholder="Votre pseudo..." />
	<label for="mdp">Mot de passe :</label><input id="mdp" name="password" type="text" placeholder="Votre mot de passe..." />
	<input type="submit" value="Se connecter">
</form>