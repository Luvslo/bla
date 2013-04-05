<?php
include("logincheck.php");
include("getuid.php");
include("post.php");
include("database.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test</title>
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
				<h1>Profil<a href="main.php?edit="><img src="img/writeb.png"></a></h1>
				<p class="image"><img src="placeholder.png"></p>
				<p class="name">Niemand</p>
			</div>
			<?php
			if (isset ($_GET['edit']) ) {
				include("edit.php");
			}
			elseif (isset ($_GET['uid']) ) {
				include("view.php");
				view($_GET['uid']);
			}
			else {
				include("pdisp.php");
			}
			?>
			<div id="left">
				<h1>Bekannte</h1>
				<div class="friends">
					<p class="friend"><a href="">Stefan Zweig</a></p>
					<p class="friend"><a href="">Thomas Mann</a></p>
				</div>
				<h1>Verteiler</h1>
				<div class="groups">
					<p class="group"><a href="">Alles</a></p>
					<p class="group"><a href="">Schriftsteller</a></p>
				</div>
			</div>
		</div>
		<div id="logout">
			<a href="logout.php"><img src="img/logout.png"></a>
		</div>
		<?php
			if (isset ($_GET["edit"]) ) {
				include ("overlay.php");
			}
		?>
	</body>
</html>
