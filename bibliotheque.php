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
<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>BIBLIOTHEQUE</h1>
			<div class="trait"></div>
			<!--<div class="img_center img-responsive">-->
			<?php
$member_id=htmlspecialchars($_SESSION["id_member"]);
		    $request=$db->prepare("SELECT joueurs_id, jeux_id, jeux.Nom, jeux.Image FROM bibliotheque JOIN jeux ON bibliotheque.jeux_id = jeux.id WHERE joueurs_id = :id");
		    $request->execute
		    (
		        array
		        (
		           "id" => $member_id
		        )
		    );
		    while($data = $request->fetch())
		    {
		    	?>
		    	<div class="col-md-6 col-xs-6">
		    	<?php
		    	echo "<p class='text_center'> Nom du jeu : " . $data["Nom"] . "<br> </p>"; ?>
		    	</div>
		    	<div class="col-md-6">
		    	<?php
		    	echo  "<img src='" . $data['Image'] . "' class='img_center img-responsive'" . "width='100%'>" ;?>
		    	</div>
		    	<?php
		    }

		
?>
<!--</div>-->
		</div>
</section>
</div>

<footer id="footer">
	<section class="container">
		<div class="row">
			<div class="col-md-6">		
				
			</div>
			<div class="col-md-6">	
				
			</div>
		</div>
	</section>
</footer>	
</body>
</html>