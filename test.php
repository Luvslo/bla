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
		<?php include("pdisp.php")?>
		<div id="logout">
			<a href="logout.php"><img src="img/logout.png"></a>
		</div>
	</body>
</html>
