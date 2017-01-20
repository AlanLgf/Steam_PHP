<?php session_start(); ?>
<?php include("conf/db.php"); ?>
<?php 
    if( isset ($_POST["pseudo"]) && isset ($_POST["password"]))
    {
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $password = htmlspecialchars($_POST["password"]);

        if ( empty($_POST["pseudo"]) && empty($_POST["password"]))
        {
            ?>
            <p class="bg-warning">Veuillez remplir les champs du formulaire.<br>Cliquez <a href="index.php">ici</a> pour retourner à la page d'accueil.</p>
            <?php
        }
        else if (empty($_POST["pseudo"])) 
        {
            ?>
            <p class="bg-warning">Vous n'avez tapé aucun pseudo.<br>Cliquez <a href="index.php">ici</a> pour retourner à la page d'accueil.</p>
            <?php
        }
        else if (empty($_POST["password"])) 
        {
            ?>
            <p class="bg-warning">Vous n'avez tapé aucun mot de passe.<br>Cliquez <a href="index.php">ici</a> pour retourner à la page d'accueil.</p>
            <?php
        }
        else
        {
        	$request = $db->prepare("SELECT id FROM joueurs WHERE Pseudo LIKE :pseudo AND Motdepasse = :password");
            $request-> execute(
                array(
                    "pseudo" => $pseudo,
                    "password" => $password
                )
            );
            $members = $request -> fetchAll();
            if(sizeof($members) > 0)
            {
                $id_member = $members[0] ["id"];
                $_SESSION["id_member"] = $id_member;
                if(isset($_SESSION["id_member"]))
                {
                    if($id_member)
                    {
                        echo "Vous êtes connectés.";
                        header("Location:index.php");
                    }
                }
            }
            else
            {
                ?>
                <p class="bg-warning">Erreur : votre pseudo / password est incorrect.<br>Cliquez <a href="index.php">ici</a> pour retourner à la page d'accueil.</p>
                <?php
            }
        }
    }