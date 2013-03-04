<?php
$db = @new mysqli('localhost', 'sn', 'php', 'sn');
if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}
if ( (isset ($_POST['content']) ) and (isset ($_POST['user']) ) and (isset ($_POST['dest']) ) ) {
	if (isset($_COOKIE['session'])) {
		$session = $_COOKIE['session'];
	}
	else {
		$session = Null;
	}
	$sql = "SELECT passwd FROM user WHERE uid=".$_POST['user'].";";
	$res = $db->query($sql);
	$passwd = $res->fetch_assoc();
	if ($passwd['passwd'] == $session) {
		echo "Hallo";
		$sql = "INSERT INTO post SET content='".$_POST['content']."', b0=0, b1=0, b2=0, b3=0, src='".$_POST['user']."', dest='".$_POST['dest']."';";
		$res = $db->query($sql);
	}
	else {
		echo "Tsch&uuml;ss";
	}
}
?>