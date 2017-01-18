 <?php session_start();?>
 <?php include("conf/db.php"); ?>
 <?php
 $request = $db->prepare("SELECT * FROM joueurs");
		    $request->execute
		    (
		        array
		        (
		           
		        )
		    );
		    while ($data = $request->fetch())
		    {
		        ?>
		        <div class="container well">
		            <div class="row">
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
?>