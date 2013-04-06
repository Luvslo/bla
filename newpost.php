<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("logincheck.php");
include("database.php");

function send ($content,$src,$dest) {
	$db = $GLOBALS['db'];
	$sql = "INSERT INTO post SET content='".$content."', time='".time()."', b0=0, b1=0, b2=0, b3=0, src=".$src.", dest=".$dest.";";
	$res = $db->query($sql);
}

function resolveUsername ($name) {
	$db = $GLOBALS['db'];
	$sql = "SELECT uid FROM user WHERE name='".$name."';";
	$res = $db->query($sql);
	if ($res->num_rows) {
		$uid = $res->fetch_assoc();
		$uid = $uid['uid'];
		return $uid;
	}
	else {
		return false;
	}
}

$destuid = resolveUsername($_POST['dest']);
if ($destuid) {
	send($_POST['content'],$_POST['user'],$destuid);
	header("Location: main.php?msg=Nachricht gesendet");
}
else {
	header("Location: main.php?msg=Ungültiger Absender");
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
