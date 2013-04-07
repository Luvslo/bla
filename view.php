<?php
//SQL-Injection safe
function view ($uid) {
	$db = $GLOBALS['db'];
	$sql = "SELECT name, desp FROM user WHERE uid=?;";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i',$uid);
	$stmt->execute();
	$stmt->bind_result($name,$desp);
	$stmt->fetch();
	/*$res = $db->query($sql);
	$data = $res->fetch_assoc();*/
	echo "
			<div id=\"main\">
				<div class=\"centerbox\">
					<div class=\"close\">
						<a href=\"main.php\">
							<img src=\"img/close.png\">
						</a>
					</div>
					<h1>".$name."</h1>
					<h2>Beschreibung</h2>
					<p>".$desp."</p>
					<div id=\"msgfwd\">
						<h2>Nachricht schreiben</h2>
						<form action=\"newpost.php\" method=\"POST\">
							<textarea class=\"msgtext\" name=\"content\"></textarea>
							<input type=\"submit\" class=\"msgsubmit\" value=\"Senden\">
							<input type=\"hidden\" name=\"user\" value=\"".$GLOBALS["uid"]."\">
							<input type=\"hidden\" name=\"dest\" value=\"".$name."\">
						</form>
					</div>
				</div>
			</div>";
}
?>
