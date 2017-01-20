 <?php session_start();?>
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

 <div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>PROFIL</h1>
			<div class="trait"></div>
 <?php
 /*$request = $db->prepare("SELECT * FROM joueurs");
		    $request->execute
		    (
		        array
		        (
		           
		        )
		    );*/
		    $member_id=htmlspecialchars($_SESSION["id_member"]);
		    $request=$db->prepare("SELECT id, Prenom, Nom, Pseudo, Date_Naissance, Date_Inscription, Adresse, Ville, Téléphone, Email, Motdepasse FROM joueurs WHERE id = :id");
		    $request->execute
		    (
		        array
		        (
		           "id" => $member_id
		        )
		    );
		    while ($data = $request->fetch())
		    {
		    	if(isset($_SESSION["id_member"]))
                {
                	?>
		        <div class="container well">
		            <div class="row">
		            	<h4>ID : </h4><p><?php echo $data["id"]; ?></p>
		            	<h4>Nom : </h4><p><?php echo $data["Nom"]; ?></p>
		            	<h4>Prénom : </h4><p><?php echo $data["Prenom"]; ?></p>
		            	<h4>Date de naissance : </h4><p><?php echo $data["Date_Naissance"]; ?></p>
		                <h4>Pseudo : </h4><p><?php echo $data["Pseudo"]; ?></p>
		                <h4>E-mail : </h4><p><?php echo $data["Email"]; ?></p>
		                <h4>Date d'inscription : </h4><p><?php echo $data["Date_Inscription"]; ?></p>
		                <h4>Adresse : </h4><p><?php echo $data["Adresse"]; ?>, <?php echo $data["Ville"]; ?></p>
		                <h4>Téléphone : </h4><p><?php echo $data["Téléphone"]; ?></p>
		           
		            </div>
		        </div>
		        <?php                    
                }
		    }
?>

</div>
</section>
</div>