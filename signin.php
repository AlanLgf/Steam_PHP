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
if (isset($_POST["prenom"]) 
&&  isset($_POST["nom"])
&&  isset($_POST["datenaissance"]) 
&&  isset($_POST["pseudo"])
&&  isset($_POST["adresse"]) 
&&  isset($_POST["ville"])
&&  isset($_POST["telephone"]) 
&&  isset($_POST["email"]) 
&&  isset($_POST["motdepasse"]))
{


	$prenom			= htmlspecialchars($_POST["prenom"]);
	$nom	 		= htmlspecialchars($_POST["nom"]);
	$datenaissance  = htmlspecialchars($_POST["datenaissance"]);
	$pseudo	 		= htmlspecialchars($_POST["pseudo"]);
	$adresse 		= htmlspecialchars($_POST["adresse"]);
	$ville			= htmlspecialchars($_POST["ville"]);
	$telephone	 	= htmlspecialchars($_POST["telephone"]);
	$email 			= htmlspecialchars($_POST["email"]);
	$motdepasse 	= htmlspecialchars($_POST["motdepasse"]);

	$request = $db->prepare("SELECT id FROM joueurs WHERE Pseudo LIKE :pseudo OR Email LIKE :email");
	$request -> execute(
		array(
		'pseudo' => $pseudo,
		'email' => $email
		)
	);

	$joueurs = $request ->fetchAll();

	if (sizeof($joueurs)== 0 ) {


			$request = $db->prepare("INSERT INTO joueurs (Prenom, Nom, Date_Naissance, Pseudo, Adresse, Ville, Téléphone, Email, Motdepasse, Date_Inscription) VALUES (:prenom, :nom, :datenaissance, :pseudo, :adresse, :ville, :telephone, :email, :motdepasse, NOW())");
			$request -> execute(
				array(
				'prenom' => $prenom,
				'nom' => $nom,
				'datenaissance' => $datenaissance,
				'pseudo' => $pseudo,
				'adresse' => $adresse,
				'ville' => $ville,
				'telephone' => $telephone,
				'email' => $email,
				'motdepasse' => $motdepasse
				)
			);

			$_SESSION["id_member"] = $db->lastInsertId(); 

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
					<label for="Prenom">Prenom :</label><input id="Prenom" name="prenom" type="text" placeholder="Prénom..." required/>
					<label for="Nom">Nom :</label><input id="Nom" name="nom" type="text" placeholder="Nom..." required />
					<label for="Date_Naissance">Date de Naissance :</label><input id="Date_Naissance" name="datenaissance" type="date" required/>
					<label for="Pseudo">Pseudo :</label><input id="Pseudo" name="pseudo" type="text" placeholder="Pseudo..." required/>
					<label for="Motdepasse">Mot de passe :</label><input id="Motdepasse" name="motdepasse" type="password" placeholder="Mot de passe..." required/>
					<label for="Adresse">Adresse :</label><input id="Adresse" name="adresse" type="text" placeholder="Adresse..." required/>
					<label for="Ville">Ville :</label><input id="Ville" name="ville" type="text" placeholder="Ville..." required/>
					<label for="Email">Email :</label><input id="Email" name="email" type="email" placeholder="Email..." required/>
					<label for="Téléphone">Téléphone :</label><input id="Téléphone" name="telephone" type="tel" maxlength="10" placeholder="Téléphone..." required/>
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