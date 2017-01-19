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
		<div class="menu">
			<section class="container">

				<nav class="navbar navbar-default navbar-fixed-top ">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-fixed-top ">
								<li><a href="login.php" class="mon_scroll">LOG IN</a></li>
								<li><a href="signin.php" class="mon_scroll">SIGN IN</a></li>
								<li><a href="bibliotheque.php" class="mon_scroll">BIBLIOTHEQUE</a></li>
								<li><a href="store.php" class="mon_scroll">STORE</a></li>
								<li><a href="index.php" class="mon_scroll">ACTUALITÉS</a></li>
							</ul>	
							<ul class="nav navbar-nav navbar-right">

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
									<ul class="dropdown-menu">
										<li><a href="login.php" class="mon_scroll">LOG IN</a></li>
										<li><a href="signin.php" class="mon_scroll">SIGN IN</a></li>
										<li><a href="bibliotheque.php" class="mon_scroll">BIBLIOTHEQUE</a></li>
										<li><a href="store.php" class="mon_scroll">STORE</a></li>
										<li><a href="index.php" class="mon_scroll">ACTUALITÉS</a></li>
									</ul>
								</li>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

		</section>
	</div>

</header>

<?php
if (isset($_POST["Prenom"]) 
&&  isset($_POST["Nom"])
&&  isset($_POST["Date_Naissance"]) 
&&  isset($_POST["Pseudo"])
&&  isset($_POST["Adresse"]) 
&&  isset($_POST["Ville"])
&&  isset($_POST["Téléphone"]) 
&&  isset($_POST["Email"]) 
&&  isset($_POST["Motdepasse"]))
{


	$Prenom	 		= htmlspecialchars($_POST["Prenom"]);
	$Nom	 		= htmlspecialchars($_POST["Nom"]);
	$Date_Naissance = htmlspecialchars($_POST["Date_Naissance"]);
	$Pseudo	 		= htmlspecialchars($_POST["Pseudo"]);
	$Adresse 		= htmlspecialchars($_POST["Adresse"]);
	$Ville			= htmlspecialchars($_POST["Ville"]);
	$Téléphone	 	= htmlspecialchars($_POST["Téléphone"]);
	$Email 			= htmlspecialchars($_POST["Email"]);
	$Motdepasse 	= htmlspecialchars($_POST["Motdepasse"]);

	$request = $db->prepare("SELECT id FROM joueurs WHERE Pseudo LIKE :Pseudo OR Email LIKE :Email");
	$request -> execute(
		array(
		'Pseudo' => $Pseudo,
		'Email' => $Email
		)
	);

	$joueurs = $request ->fetchAll();

	if (sizeof($joueurs)== 0 ) {


			$request = $db->prepare("INSERT INTO joueurs (Prenom, Nom, Date_Naissance, Pseudo, Adresse, Ville, Téléphone, Email, Motdepasse, Date_Inscription) VALUES (:Prenom, :Nom, :Date_Naissance, :Pseudo, :Adresse, :Ville, :Téléphone, :Email, :Motdepasse, NOW())");
			$request -> execute(
				array(
				'Prenom' => $Prenom,
				'Nom' => $Nom,
				'Date_Naissance' => $Date_Naissance,
				'Pseudo' => $Pseudo,
				'Adresse' => $Adresse,
				'Ville' => $Ville,
				'Téléphone' => $Téléphone,
				'Email' => $Email,
				'Motdepasse' => $Motdepasse
				)
			);
			$_SESSION["id_member"] = $db->lastInsertId(); 
			header('Location: bibliotheque.php');

	}else{
		echo 'Error : this member already exists
		<a class="btn btn-primary" href="login.php">Log In <span class="glyphicon glyphicon-chevron-right"></span></a>';
	}

}

 ?>


<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>SIGN IN</h1>
			<div class="trait"></div>
			<form action="signin.php" method="post" class="inscription">
					<label for="Prenom">Prenom :</label><input id="Prenom" name="Prenom" type="text" placeholder="Prénom..." required/>
					<label for="Nom">Nom :</label><input id="Nom" name="Nom" type="text" placeholder="Nom..." required />
					<label for="Date_Naissance">Date de Naissance :</label><input id="Date_Naissance" name="Date_Naissance" type="date" required/>
					<label for="Pseudo">Pseudo :</label><input id="Pseudo" name="Pseudo" type="text" placeholder="Pseudo..." required/>
					<label for="Motdepasse">Mot de passe :</label><input id="Motdepasse" name="Motdepasse" type="password" placeholder="Mot de passe..." required/>
					<label for="Adresse">Adresse :</label><input id="Adresse" name="Adresse" type="text" placeholder="Adresse..." required/>
					<label for="Ville">Ville :</label><input id="Ville" name="Ville" type="text" placeholder="Ville..." required/>
					<label for="Email">Email :</label><input id="Email" name="Email" type="email" placeholder="Email..." required/>
					<label for="Téléphone">Téléphone :</label><input id="Téléphone" name="Téléphone" type="tel" placeholder="Téléphone..." required/>
					<input type="submit" value="S'inscrire">
				</form>	
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