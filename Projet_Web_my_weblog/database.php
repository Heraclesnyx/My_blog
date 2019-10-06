<?php

$db = new PDO('mysql:host=localhost; dbname=weblog','root','');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Inscription d'un membre</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="my_weblog.php">
		<link rel="stylesheet" type="text/css" href="">
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
						<input type="text" id="pseudo" name="pseudo"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail">Mail :</label>
						</td>
						<td>
						<input type="email" id="mail" name="mail"/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail2">Confirmation du mail :</label>
						</td>
						<td>
						<input type="email" id="mail2" name="mail2"/>
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
		</div>
	</body>
</html>