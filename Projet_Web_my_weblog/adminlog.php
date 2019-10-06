<!doctype html>
<head>
	<meta charset="utf-8">
	<title>El Blog del UNICORN</title>
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Lato" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body role="document">
	<header id="header">
		<div class="log"> 
			<div class="container">
				<form method="post" action="index.php">
					<input type="text" placeholder=" Username" name="pseudo" required>
					<input type="password" placeholder=" Password" name="psw" required>
					<button type="submit">Login</button>
				</form>
				<p class="tinytext"> Not registered ? <a href="inscription.php">Create an account</a></p>
			</div>
		</div>
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
			<h2 id="identadmin">IDENTIFICATION ADMINISTRATEUR</h2>
			<form method="post" action="panneauadmin">
				<input class="inputadmin" type="text" placeholder=" Username" name="pseudo" required>
				<input class="inputadmin" type="password" placeholder=" Password" name="psw" required>
				<button id="submitadmin" type="submit">Login</button>
			</form>

		</div>
	</div>
	<footer id="footer" role="contentinfo"><a href="adminlog.html">Panneau d'administration</a></footer>
</body>
</html>