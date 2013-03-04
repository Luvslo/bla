<?php
if (isset ($_COOKIE['session']) ) {
	$db = @new mysqli('localhost', 'sn', 'php', 'sn');
	if (mysqli_connect_errno()) {
		die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
	}
	$sql = "SELECT uid FROM user WHERE session=".$_COOKIE['session'].";";
	$res = $db->query($sql);
	if ($res) {
	}
	else {
		header("Location: mlogin.php?msg=Bitte vorher einloggen.");
	}
}
else {
	header("Location: mlogin.php?msg=Bitte vorher einloggen.");
}