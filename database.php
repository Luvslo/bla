<?php
$db = @new mysqli('localhost', 'sn', 'php', 'sn');
if (mysqli_connect_errno()) {
	die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}
?>
