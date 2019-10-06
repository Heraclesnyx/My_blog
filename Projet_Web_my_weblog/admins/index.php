<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription d'un membre</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="my_weblog.php">
		<link rel="stylesheet" type="text/css" href="">
	</head>

	<body>
		
	<?php

		require_once '../database.php';

		if(!$_SESSION['admins']){

			header('location:membre/database.php');

		}

		$req = $db->query('SELECT * FROM login');

		$login = $req->fetch();

	?>

	</body>
</html>