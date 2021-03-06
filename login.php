<?php
//SQL-Injection safe
$db = @new mysqli('localhost', 'sn', 'php', 'sn');
if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}
if (isset($_POST['user'],$_POST['passwd']) ) {
	$pwdenc = hash('sha256',$_POST['passwd']);
	$sql = "SELECT passwd FROM user WHERE name=?;";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('s',$_POST['user']);
	$stmt->execute();
	$stmt->bind_result($passwd);
	$stmt->fetch();
	$stmt->close();
	if ($passwd == $pwdenc) {
		header("Location: main.php?msg=Login erfolgreich.");
		$session = md5(time().$passwd);
		setcookie ("session", $session);
		$sql = "UPDATE user SET session=\"".$session."\" WHERE name=?;";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$_POST['user']);
		$stmt->execute();
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="2;url=mlogin.php?msg=Name oder Passwort sind falsch.">
		<title>Login...</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<div style="height:100%; position:absolute; width:100%">
			<div id="loginform" style="background-image:url(img/logoanm.gif); width:512px; height:512px; border:0px; position:absolute; top:50%; left:50%; margin-top:-256px; margin-left:-256px">
			</div>
		</div>
	</body>
</html>
