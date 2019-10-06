<?php
echo '<div class="log"> 
		<div class="container">
		<p>Bienvenue '.$_SESSION['login_user'].', dans le monde des Licornes !</p><a href="destroy_session.php" name="submit_disconnect" id="disconnect_button">Disconnect</a>
		</div>
	</div>';
?>