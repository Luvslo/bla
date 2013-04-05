<?php
include("logincheck.php");
include("getuid.php");
include("database.php");
$sql = "UPDATE user SET desp='".$_POST['desp']."' WHERE uid=".$uid.";";
$res = $db->query($sql);
header("Location: main.php?msg=Beschreibung gespeichert.");
?>
