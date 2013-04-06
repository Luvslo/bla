<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("logincheck.php");
include("database.php");
include("getuid.php");
$sql = "SELECT * FROM uurel WHERE uida=".$uid." AND uidp=".$_GET['uid'].";";
$res = $db->query($sql);
if ( !($res->num_rows) ) {
	$sql = "INSERT INTO uurel SET uida=".$uid.", uidp=".$_GET['uid'].";";
	$res = $db->query($sql);
	header("Location: main.php?msg=Gemerkt");
}
else {
	header("Location: main.php?msg=Ist bereits gemerkt");
}
?>
