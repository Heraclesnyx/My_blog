<?php
echo '<div class="log"> 
				<div class="container">
					<form method="post" action="index.php">
						<input type="text" placeholder=" Username" name="pseudo" required>
						<input type="password" placeholder=" Password" name="psw" required>
						<button name="submit_login" type="submit">Login</button>
					</form>
					<p class="tinytext"> Not registered ? <a href="inscription.php">Create an account</a></p>
				</div>
			</div>';
?>