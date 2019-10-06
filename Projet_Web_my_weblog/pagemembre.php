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
		<div id="membre-container">
			<p>PHP a inserer ! :</p>
			<p>Username </p>
			<p>Username modifiable</p>
			<p>email modifiable </p>
			<p>pwd modifiable</p>
			<p>Sexe ?</p>
			<p>Date de naissance ? </p>

		</div>
	</div>
	<footer id="footer" role="contentinfo"><a href="adminlog.php">Panneau d'administration</a></footer>
</body>
</html>