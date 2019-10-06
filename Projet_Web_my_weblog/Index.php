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
		<article role="article">
			<header class="article-header">
				<h2>SARAKONTKWA ? </h2>
				<time datetime="" pubdate="pubdate"></time>
			</header>
			<div class="content">COUCOU MWA C SARAH JAIM B1 LE LIKORN ET LES PUSHEEN MDRRRRRRR. ET MWA CE MATIN JE VOULAY PA ME LEVER LOL JETAI KOM SA : <br/>
				<img src="https://s-media-cache-ak0.pinimg.com/originals/5b/6d/c7/5b6dc7b42b54ce176ed1ce34b4c1b983.gif"/>
			</div>
			<footer class="article-footer">Voir les commentaires | Ajouter un commentaire</footer>
		</article>
		<article role="article">
			<header class="article-header">
				<h2>SARAPORTINMAX? </h2>
				<time datetime="" pubdate="pubdate"></time>
			</header>

			<div class="content">MWA KAN JE SERAI GRANDE JE SERAI DEVELLOPEUSE ET JE ME FERAI UN MAX DE BIFF POUR ME PAYER DE LA COK ET DEY COURTISANES MDR !! <br/>
				<img src="http://publish.uwo.ca/~mguignar/images/pusheen-money.png"/>
			</div>

			<footer class="article-footer">Voir les commentaires | Ajouter un commentaire</footer>
		</article>
	</div>
	<footer id="footer" role="contentinfo"><a href="adminlog.php">Panneau d'administration</a></footer>
	<script type="text/javascript" src="js/destroy_session.js"></script>
</body>
</html>