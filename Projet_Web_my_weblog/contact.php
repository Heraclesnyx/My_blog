<?php
include('login.php');
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
		<div id="formcontainer">
			<h2 id="identadmin">CONTACTER UN ADMINISTRATEUR</h2>
			<form action="/ma-page-de-traitement" method="post">
				<div>
					<label class="contact-label" for="nom">Username :</label>
					<input type="text" id="contact-name" name="user_name" />
				</div>
				<div>
					<label class="contact-label" for="courriel">Email :</label>
					<input type="email" id="contact-email" name="user_email" />
				</div>
				<div>
					<label class="contact-label" for="message">Votre message :</label>
					<textarea id="contact-message" name="user_message"></textarea>
				</div>

				<div class="button">
					<button type="submit">Envoyer votre message</button>
				</div>
			</form>
			
		</div>
	</div>
	<footer id="footer" role="contentinfo"><a href="adminlog.php">Panneau d'administration</a></footer>
</body>
</html>