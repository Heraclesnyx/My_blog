<?php
include('login.php');

$bdd = new PDO("mysql:host=localhost;dbname=weblog","root","");

if (isset($_POST['inscription']))
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$mdp = sha1($_POST['mdp']); //sha1 permet de haché le mot de passe afin de mieux sécuriser
	$mdp2 = sha1($_POST['mdp2']);
	$usertype = 2;

	if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		$pseudoLength = strlen($pseudo); //on limite la taille du pseudo
		if ($pseudoLength <= 20)
		{
			$reqpseudo = $bdd->prepare("SELECT * FROM membre where pseudo =?");
			$reqpseudo->execute(array($pseudo));
			$pseudoexist = $reqpseudo->rowCount();
				if ($pseudoexist ==0) 
				{
				$erreur = "Ce pseudo est disponible";
				}	
				else
				{
					$erreur = "Votre pseudo n'est pas valide";
				}
				
					if ($mail == $mail2)
					{
						$reqmail = $bdd->prepare("SELECT * FROM membre WHERE email =?"); 
						$reqmail->execute(array($mail));
						$mailexist = $reqmail->rowCount();
						if ($mailexist == 0) 
						{
						
							if ($mdp == $mdp2)
							{
								$insertmbr = $bdd->prepare("INSERT INTO membre(pseudo, email, passe) VALUES(?, ?, ?)");
								$insertmbr->execute(array($pseudo, $mail, $mdp));
								$results = "Votre compte a bien été créé !";
							}
							else
							{
								$results = "Vos mots de passes ne correspondent pas !";

							}
						}
						else
						{
							$results = "Adresse mail déjà utilisée !";
						}
					}
					else
					{
						$results = "Vos adresses mail ne correspondent pas !";
					}
			
		}
		else {
			$results = "Votre pseudo ne doit pas dépasser 20 caractères !";
		}
	}
	else
	{
		$results = "Tous les champs doivent être remplis";
	}
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>El Blog del UNICORN</title>
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Lato" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body role="document">
	<header id="header">
		<?php
		if (isset($_SESSION['login_user'])) {
		include('session_start.php');
		} else { 
		include('authentification.php');
		}
		?>
		<div class="bandeau">
			<h1 id="title" role="banner">• • Blog del Unicorn • •</h1>
		</div>
		<nav id="blognav">
			<ul>
				<li class="menu"><a href="Index.php">Accueil</a></li>
				<li class="menu"><a href="pagemembre.php">Espace Membre</a></li>
				<li class="menu"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div id="main" role="main">
		<div id="formcontainer2">
			<h2 id="identadmin">FORMULAIRE INSCRIPTION</h2>
			<?php
		if (isset($_SESSION['login_user'])) {
			echo "<p>Vous êtes déjà connecté, vous ne pouvez pas vous inscrire :) Commencez par vous déconnecter..</p>";
		} else { 
			echo '<form method="post">
				<p>
					<label>Pseudo :</label> <input class="subscribeinput" value="" type="text" placeholder="3 caractères minimum" pattern=".{3,20}" name="pseudo" required /><br/>
					<label for="pass">Mot de passe :</label> <input class="subscribeinput" type="password" placeholder="6 caractères" pattern=".{6,}" name="mdp" id="pass" required/> <br/>
					<label for="pass">Confirmation mot de passe :</label> <input class="subscribeinput" type="password" placeholder="6 caractères minimum" pattern=".{6,}" name="mdp2" id="pass" required/> <br/>
					<label for="pass">Email : </label> <input name="mail" class="subscribeinput" type="email" required /> <br/>
					<label for="pass">Confirmation email : </label> <input value="" name="mail2" class="subscribeinput" type="email" required /> <br/>
					<label>.</label><button class="subscribebutton" name="inscription" type="submit">S\'inscrire</button>
				</p>
			</form>';
		}
		if(isset($results))
		{
			echo $results;
		}

		?>
		</div>
		</div>
		<footer id="footer" role="contentinfo"><a href="adminlog.php">Panneau d'administration</a></footer>
</body>
</html>