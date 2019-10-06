<?php

$bdd = new PDO("mysql:host=localhost;dbname=weblog","root","");

if (isset($_POST['inscription']))
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$mdp = sha1($_POST['mdp']); //sha1 permet de haché le mot de passe afin de mieux sécuriser
	$mdp2 = sha1($_POST['mdp2']);

	if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		$pseudoLength = strlen($pseudo); //on limite la taille du pseudo
		if ($pseudoLength <= 20)
		{
			
			if ($mail == $mail2)
			{
				$reqmail= $bdd->prepare("SELECT * FROM membre WHERE email =?"); // a partir d'ici notre petite requête nous permet de voir si l'adresse mail existe déjà ou pas avec l'aide de if(mailexist == 0)
				$reqmail->execute(array($mail));
				$mailexist = $reqmail->rowCount();//rowCount compte le nbr de colonne existant
				if ($mailexist == 0) 
				{
				
					if ($mdp == $mdp2)
					{
						$insertmbr = $bdd->prepare("INSERT INTO membre(pseudo, email, passe) VALUES(?, ?, ?)");
						$insertmbr->execute(array($pseudo, $mail, $mdp));
						$erreur = "Votre compte a bien été créé !";
						// $_SESSION['comptecree'] = "Votre compte a bien été créé !";
						// header('Location: login.php');// permet de réorienter l'utilisateur vers l'index du site DONC A MODIFIER

						// if ($pseudo == 0) {
							
							$reqpseudo = $bdd->prepare("SELECT * FROM membre where pseudo =?");
							$reqpseudo->execute(array($pseudo));
								$pseudoexist = $reqpseudo->rowCount();
								if ($pseudoexist ==1) 
								{
									$erreur = "Ce pseudo est déjà prit";
									
									else 
									{
										$erreur = "Votre pseudo est validé";
									}
								}
							else
							{
								$erreur = "Vos mots de passes ne correspondent pas !";

							}
					}
					else
					{
						$erreur = "Adresse mail déjà utilisée !";
					}
				}
				else
				{
					$erreur = "Vos adresses mail ne correspondent pas !";					}
				}
			else {
				$erreur = "Votre pseudo ne doit pas dépasser 20 caractères !";
			}
		}
	else
	{
	$erreur = "Tous les champs doivent être rempli";
	}

	
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription d'un membre</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="my_weblog.php">
		<link rel="stylesheet" type="text/css" href=".php">
	</head>

	<body>
		<div align="center">
			<h2>Inscription</h2>
			<form method="post">
				<table>
					<tr>
						<td align="right">
							<label for="pseudo">Pseudo :</label>
						</td>
						<td>
						<input type="text" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail">Mail :</label>
						</td>
						<td>
						<input type="email" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail2">Confirmation du mail :</label>
						</td>
						<td>
						<input type="email" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp">Mot de passe :</label>
						</td>
						<td>
						<input type="password" id="mdp" name="mdp">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp2">Confirmation du mot de passe :</label>
						</td>
						<td>
						<input type="password" id="mdp2" name="mdp2">
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							<br />
							<input type="submit" name="inscription" value="Je m'inscris"/>
						</td>
					</tr>
				</table>				
			</form>
			<?php
			if(isset($erreur))
			{
				echo $erreur;
			}

			?>
		</div>
	</body>
</html>