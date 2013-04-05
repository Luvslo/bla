<?php
include("logincheck.php");
include("getuid.php");
include("database.php");
$sql = "SELECT passwd FROM user WHERE uid=".$uid.";";
$res = $db->query($sql);
$passwd = $res->fetch_assoc();
$passwd = $passwd['passwd'];
if ($_POST['pn0'] == $_POST['pn1']) {
	$pdhash = hash('sha256',$_POST['pdo']);
	if ($pdhash == $passwd) {
		$newpdhash = hash('sha256',$_POST['pn0']);
		$sql = "UPDATE user SET passwd='".$newpdhash."' WHERE uid=".$uid.";";
		$res = $db->query($sql);
		header("Location: main.php?msg=Passwort geändert");
	}
	else {
		header("Location: main.php?msg=Falsches Passwort&edit=");
	}
}
else {
	header("Location: main.php?msg=Neue Passwörter stimmen nicht überein&edit=");
}
?>
