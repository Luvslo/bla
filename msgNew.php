<?php
include("logincheck.php");
include("getuid.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<title>Nachricht weiterleiten</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
	<?php
		if (isset($_GET['msg'])) {
			echo "<div class=\"messagebox\"><p>".$_GET['msg']."</p></div>";
		}
		?>
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
						<input type="hidden" name="user" value="<?php echo $uid; ?>">
					<form>
				</div>
			</div>
		<?php include 'left.php'?>
		</div>
	</body>
</html>
