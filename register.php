<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include("database.php");
	$sql = "SELECT * FROM user WHERE name='".$_POST['name']."';";
	$res = $db->query($sql);
	if ($res->num_rows) {
		header("Location: mregister.php?msg=Der Name ist schon vergeben");
	}
	elseif ( !($_POST['pd0'] == $_POST['pd1']) ) {
		header("Location: mregister.php?msg=Das Passwort stimmt nicht überein");
	}
	else {
		$pdenc = hash('sha256',$_POST['pd0']);
		$sql = "INSERT INTO user SET name='".$_POST['name']."', passwd='".$pdenc."';";
		$res = $db->query($sql);
		header("Location: main.php?msg=Erfolgreich registriert");
		$session = md5(time().$passwd);
		setcookie ("session", $session);
		$sql = "UPDATE user SET session=\"".$session."\" WHERE name=\"".$_POST['name']."\";";
		$res = $db->query($sql);
	}
?>
