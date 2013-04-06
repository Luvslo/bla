<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("logincheck.php");
include("database.php");
include("getuid.php");
$sql = "INSERT INTO uurel SET uida=".$uid.", uidp=".$_GET['uid'].";";
$res = $db->query($sql);
header("Location: main.php?msg=Gemerkt");
?>
