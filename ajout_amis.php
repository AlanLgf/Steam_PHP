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


<?php

$joueur_id = $_SESSION["id_member"];
    
$request = $db->prepare("SELECT Pseudo, id FROM joueurs WHERE id != :id ");
$request -> execute(array(
	"id"=> $joueur_id
	));

while($data = $request->fetch())
    {
    	echo "Pseudo : " . $data["Pseudo"];
    	?>
    	<a href="amis.php?id=<?php echo $data["id"]; ?>" class="btn btn-primary btn-lg active" role="button">Ajouter</a> <br>
    	<?php
    	
    }
    ?>

