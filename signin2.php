<?php  include "conf/db.php";

if (isset($_POST["pseudo"]) 
&&  isset($_POST["password"]) 
&&  isset($_POST["email"]))
{


	$pseudo	 	= htmlspecialchars($_POST["pseudo"]);
	$password 	= htmlspecialchars($_POST["password"]);
	$email 		= htmlspecialchars($_POST["email"]);

	$request = $db->prepare("SELECT id FROM members WHERE pseudo LIKE :pseudo OR email LIKE :email");
	$request -> execute(
		array(
		'pseudo' => $pseudo,
		'email' => $email
		)
	);

	$members = $request ->fetchAll();

	if (sizeof($members)== 0 ) {


			$request = $db->prepare("INSERT INTO members (pseudo, password, email, inscription_date, is_admin) VALUES (:pseudo, :password, :email, NOW(), 0)");
			$request -> execute(
				array(
				'pseudo' => $pseudo,
				'password' => $password,
				'email' => $email
				)
			);
			$_SESSION["id_member"] = $db->lastInsertId(); 

			?>
    		<meta http-equiv='refresh' content='0'>

			<?php 

	}else{
		echo 'Error : this member already exists
		<a class="btn btn-primary" href="login.php">Log In <span class="glyphicon glyphicon-chevron-right"></span></a>';
	}

}

 ?>