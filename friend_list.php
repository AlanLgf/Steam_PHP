<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	<link href="css/animate.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script  type="text/javascript">
		wow = new WOW();
		wow.init();
	</script>
</head>
<body>	
<?php include("conf/db.php"); ?>
	<header id="header">
		<?php include("header.php"); ?>
</header>

<a href="ajout_amis.php" class="btn btn-primary btn-lg active" role="button">Ajouter des amis</a>

<?php

               

$request = $db->prepare("SELECT joueurs_id1, id, Pseudo FROM amis JOIN joueurs WHERE joueurs_id1 = id");
$request -> execute(array());

while($data = $request->fetch())
    {
    	echo "Ami : " . $data["Pseudo"] . "<br>";
    	?>
    	<?php
    	
    }
    

$request->closeCursor(); ?>