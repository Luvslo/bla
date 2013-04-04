<?php
$db = @new mysqli('localhost', 'sn', 'php', 'sn');
if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}
$sql = "SELECT uid FROM user WHERE session='".$_COOKIE['session']."';";
$res = $db->query($sql);
$uid = $res->fetch_assoc();
$uid = $uid['uid'];
?>
