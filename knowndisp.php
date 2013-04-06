<?php
$sql = "SELECT name, uidp FROM uurel, user WHERE uida=".$uid." AND uidp=uid;";
$res = $db->query($sql);
while ($row = $res->fetch_assoc()) {
	echo "<p class=\"friend\"><a href=\"main.php?uid=".$row['uidp']."\">".$row['name']."</a></p>";
}
?>
