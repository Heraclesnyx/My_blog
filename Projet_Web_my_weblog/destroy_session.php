<?php
Session_start();
Session_destroy();
echo '<br><br><div class="alert alert-dismissable alert-success">
	<p>Vous vous êtes déconnecté(e) ! Au revoir et à bientot ! Redirection à la page d\'accueil.. <meta http-equiv="refresh" content="2; URL=index.php"></p>
	</div>';
?>