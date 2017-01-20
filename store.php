<?php session_start(); ?>
<?php include("conf/db.php"); ?>
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
	

	<header id="header">
		<?php include("header.php"); ?>
</header>
<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>STORE</h1>
			<div class="trait"></div>
			<div class="col-md-12 col-xs-12 text-right">
				<input id="input_jeu" type="text">
			</div>
			<?php

       

$request = $db->prepare("SELECT id, Image, id_jeux, NomCatégorie, Nom FROM jeux JOIN catégorie WHERE id_jeux = id");
$request -> execute(array());


while ($data = $request->fetch()) {
?>



			<div class="col-md-4 container_jeu">
			<?php echo $data['NomCatégorie']; ?>
				<div class="img_jeux">
					<p class="nom_jeu"><?php echo $data['Nom']; ?></p>
					<a href="jeux.php?id=<?php echo $data['id']; ?>">
						<img src="<?php echo $data['Image']?>" width="100%">
					</a>
				</div>
			</div>

<?php
		
}

$request->closeCursor(); ?>
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