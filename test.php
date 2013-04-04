<?php
include("logincheck.php");
include("getuid.php");
include("post.php");
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
				<h1>Profil</h1>
				<p class="image"><img src="placeholder.png"></p>
				<p class="name">Niemand</p>
			</div>
			<div id="main">
				<h1>Alles</h1>
				<?php
					post("Niemand",1365078659,"Stefan Zweig wurde als Sohn des wohlhabenden jüdischen Textilunternehmers Moritz Zweig und dessen Gattin Ida Brettauer, Spross eines reichen Kaufmannsgeschlechts aus Hohenems, geboren. Er wuchs gemeinsam mit seinem Bruder Alfred in einer prächtigen Wohnung am Wiener Schottenring auf. Die Familie Zweig war nicht religiös, Zweig selbst bezeichnete sich später als „Juden aus Zufall“. (siehe <a href=\"http://de.wikipedia.org/wiki/Stefan_Zweig\">Wikipedia</a>)");
				$db = @new mysqli('localhost', 'sn', 'php', 'sn');
				if (mysqli_connect_errno()) {
					die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
				}
				$sql = "SELECT content, time, name FROM post, user WHERE dest=".$uid." AND src=uid";
				$res = $db->query($sql);
				while ($row = $res->fetch_assoc()) {
					post($row['name'], $row['time'], $row['content']);
				}
				?>
				<form>
					<div class="send">
						<textarea></textarea>
						<input type="submit" value="Senden">
					</div>
				</form>
			</div>
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
	</body>
</html>
