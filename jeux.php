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
<?php include("header.php"); ?>

<?php

	$id = htmlspecialchars($_GET["id"]);
	$request = $db->prepare("SELECT Nom, Description, Date_Mise_En_Ligne, Version, Prix, Image FROM jeux WHERE jeux.id = :id");
        $request->execute
        (
            array
            (
                "id"=>$id
            )
        );
    while($data = $request->fetch())
    {
    	?>

		 <div class="main1" id="main1">
			<section class="container">
				<div class="row">
			<h1><?php echo $data['Nom']?></h1>
			<div class="trait"></div>
			<div class="col-md-6">
    	<?php
    	echo "<p class='text_center_jeux'>Nom du jeu : " . $data["Nom"] . "<br>";
    	echo "Description : " . $data["Description"] . "<br>";
    	echo "Date de mise en ligne : " . $data["Date_Mise_En_Ligne"] . "<br>";
    	echo "Version : " . $data["Version"] . "<br>";
    	echo "Prix : " . $data["Prix"] . "<br></p>";?>
    	</div>
      	<div class="col-md-6">
    	<?php
    	echo  "<img src='" . $data['Image'] . "' class='img_center img-responsive'" . "width='100%'>";
    }

?>
	<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Acheter</a>
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
