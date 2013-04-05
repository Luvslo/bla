<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test</title>
		<link rel="stylesheet" href="login.css">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<?php
		if (isset($_GET['msg'])) {
			echo "<div class=\"messagebox\"><p>".$_GET['msg']."</p></div>";
		}
		?>
		<div id="registerbox">
			<h1>Registrieren</h1>
			<form action="register.php" method="POST" class="regform">
				<p class="form">
					<label for="name">Name:</label>
					<input type="text" name="name" id="name">
				</p>
				<p class="form">
					<label for="pd0">Passwort:</label>
					<input type="password" name="pd1" id="pd0">
				</p>
				<p class="form">
					<label for="pd1">Passwort:</label>
					<input type="password" name="pd0" id="pd1">
				</p>
				<input type="submit" value="Registrieren" class="msgsubmit">
			</form>
		</div>
	</body>
</html>
