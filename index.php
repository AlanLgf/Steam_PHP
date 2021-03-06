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

	<header id="header">
	
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			   

			    <?php
               
				$request = $db->prepare("SELECT id, Image FROM jeux LIMIT 3");
				$request -> execute(array());
				$i = 0;

				while ($data = $request->fetch()) {
				?>

							<?php $i++; ?>
							<?php if ($i == 1)
							{
								?>
								<div class="item active">
								<?php
							} else{
								 ?>
									<div class="item">
								 <?php
								}?>
							
								<p>ACTU JEUX <?php echo $i; ?></p>
									<div class="carousel-caption">
										<img src="<?php echo $data['Image']?>" width="100%">
									</div>
							</div>

				<?php
						
				}
				?>
			    

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>




</header>



<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>ACTUALITÉS</h1>
			<div class="trait"></div>
<?php

               

$request = $db->prepare("SELECT id, Image FROM jeux LIMIT 6");
$request -> execute(array());


while ($data = $request->fetch()) {
?>



			<div class="col-md-4">
				<div class="img_jeux">
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