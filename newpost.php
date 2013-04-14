<?php
//SQL-Injection safe
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("logincheck.php");
include("database.php");

function send ($content,$src,$dest) {
	$db = $GLOBALS['db'];
	$sql = "INSERT INTO post SET content=?, time='".time()."', b0=0, b1=0, b2=0, b3=0, src=?, dest=?;";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sii',$content,$src,$dest);
	$stmt->execute();
}

function answer ($content,$src,$ref) {
	$db = $GLOBALS['db'];
	$sql = "SELECT src FROM post WHERE pid=?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i',$ref);
	$stmt->execute();
	$stmt->bind_result($dest);
	$stmt->fetch();
	$stmt->close();
	$sql = "INSERT INTO post SET content=?, time='".time()."', b0=1, b1=0, b2=0, b3=0, src=?, dest=?, ref=?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('siii',$content,$src,$dest,$ref);
	$stmt->execute();
}

function resolveUsername ($name) {
	$db = $GLOBALS['db'];
	$sql = "SELECT uid FROM user WHERE name=?;";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('s',$name);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows) {
		$stmt->bind_result($uid);
		$stmt->fetch();
		return $uid;
	}
	else {
		return false;
	}
}

if ( isset($_POST['ref'],$_POST['type']) ) {
	if ($_POST['type'] == '1') {
		answer($_POST['content'],$_POST['user'],$_POST['ref']);
		header("Location: main.php?msg=Nachricht gesendet");
	}
}
else {
	$destuid = resolveUsername($_POST['dest']);
	if ($destuid) {
		send($_POST['content'],$_POST['user'],$destuid);
		header("Location: main.php?msg=Nachricht gesendet");
	}
	else {
		header("Location: main.php?msg=Ungültiger Absender");
	}
}
/*$sql = "SELECT uid FROM user WHERE name='".$_POST['dest']."';";
$res = $db->query($sql);
$uid = $res->fetch_assoc();
if ($uid) {
	$uid = $uid["uid"];
	$sql = "INSERT INTO post SET content='".$_POST['content']."', time='".time()."', b0=0, b1=0, b2=0, b3=0, src=".$_POST['user'].", dest=".$uid.";";
	$res = $db->query($sql);
	header("Location: main.php?msg=Nachricht gesendet");
}
else {
	header("Location: main.php?msg=Ungültiger Absender");
}*/
?>
