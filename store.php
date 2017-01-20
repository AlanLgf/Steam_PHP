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

	<?php session_start(); ?>
	<?php include("conf/db.php"); ?>

	<header id="header">
		<?php include("header.php"); ?>
</header>
<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>STORE</h1>
			<div class="trait"></div>
			<div class="shop">
			<?php
			$jeux = array ('id', 'categorie', 'nom', 'description', 'date de mise en ligne', 'version', 'prix', 'images');
			 $requete = $jeux->prepare("SELECT id, categorie, nom, description, date_de_mise_en_ligne, version, prix, images FROM livreor ORDER BY datemsg DESC;");
			if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
			} else {
			$_SESSION['count']++;
			}
			?>
			</div>
		</div>
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