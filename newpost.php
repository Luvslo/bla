<?php
include("logincheck.php");
$db = @new mysqli('localhost', 'sn', 'php', 'sn');
if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}
$sql = "INSERT INTO post SET content='".$_POST['content']."', b0=0, b1=0, b2=0, b3=0, src='".$_POST['user']."', dest='".$_POST['dest']."';";
$res = $db->query($sql);
?>