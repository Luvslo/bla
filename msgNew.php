<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<title>Nachricht weiterleiten</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<?php include 'header.html';?>
		<div id="content">
			<div id="profile">
				<h1>Profil</h1>
				<p class="image"><img src="placeholder.png"></p>
				<p class="name">Niemand</p>
			</div>
			<div id="main">
				<h1>Nachricht weiterleiten</h1>
				<div class="msgfwd">
					<form action="newpost.php" method="POST">
						<p>Empfänger: <input type="text" name="dest"></p>
						<textarea class="msgtext" name="content"></textarea>
						<input type="submit" class="msgsubmit" value="Weiterleiten">
						<input type="hidden" name="user" value="1">
					<form>
				</div>
			</div>
		<?php include 'left.php'?>
		</div>
	</body>
</html>
