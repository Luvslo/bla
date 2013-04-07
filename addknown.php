<?php
//SQL-Injection safe
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("logincheck.php");
include("database.php");
include("getuid.php");
$sql = "SELECT * FROM uurel WHERE (uida=".$uid." AND uidp=?);";
$stmt = $db->prepare($sql);
$stmt->bind_param('s',$_GET['uid']);
$stmt->execute();
$stmt->store_result();
if ($uid==$_GET['uid']) {
	header("Location: main.php");
}
elseif ( !($stmt->num_rows) ) {
	$stmt->close();
	$sql = "INSERT INTO uurel SET uida=".$uid.", uidp=?;";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('s',$_GET['uid']);
	$stmt->execute();
	header("Location: main.php?msg=Gemerkt");
}
else {
	header("Location: main.php?msg=Ist bereits gemerkt");
}
?>
