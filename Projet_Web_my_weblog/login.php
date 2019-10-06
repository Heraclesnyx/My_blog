<?php
session_start();
$error='';
if (isset($_POST['submit_login'])) {
	if(empty($_POST['pseudo']) || empty($_POST['psw'])) {
		echo $error = '<br><br><div class="alert alert-dismissable alert-success">Pseudo et/ou mot de passe invalide</p>
	</div>"';
	} else {
		$username = $_POST['pseudo'];
		$password = sha1($_POST['psw']);
		$db = new PDO("mysql:host=localhost;dbname=weblog","root","");
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$result = $db->prepare("SELECT pseudo, passe FROM membre WHERE pseudo = ? AND passe = ?");
		$result->execute(array($username, $password));
		$rows = $result->rowCount();
		if ($rows == 1) {
			$_SESSION['login_user'] = $username;
			// echo $_SESSION['login_user'];
			echo '<br><br><div class="alert alert-dismissable alert-success">
	<p>Vous etes bien connecté(e) ! Redirection à la page d\'accueil.. <meta http-equiv="refresh" content="2; URL=index.php"></p>
	</div>';
} else {
	$error = "Pseudo et/ou mot de passe invalide";
}
  $result->closeCursor();
	}
}
?>