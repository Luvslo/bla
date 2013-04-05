<?php
include("logincheck.php");
include("database.php");
$sql = "SELECT uid FROM user WHERE name='".$_POST['dest']."';";
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
}
?>
