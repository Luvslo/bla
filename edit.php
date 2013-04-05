<?php
$sql = "SELECT name, desp, passwd FROM user WHERE uid=".$uid.";";
$res = $db->query($sql);
$data = $res->fetch_assoc();
echo "
		<div id=\"main\">
			<div class=\"centerbox\">
				<div class=\"close\">
					<a href=\"main.php\">
						<img src=\"img/close.png\">
					</a>
				</div>
				<h1>".$data['name']."</h1>
				<h2>Beschreibung</h2>
				<form action=\"editDesp.php\" method=\"POST\">
					<textarea name=\"desp\">".$data['desp']."</textarea>
					<input class=\"msgsubmit\" type=\"submit\" value=\"Ändern\">
				</form>
				<h2>Passwort ändern</h2>
				<form action=\"editPasswd.php\" method=\"POST\">
					<p class=\"formp\"><label for=\"pdo\">altes Passwort</label><input type=\"password\" id=\"pdo\" name=\"pdo\"></p>
					<p class=\"formp\"><label for=\"pn0\">neues Passwort</label><input type=\"password\" id=\"pdn\" name=\"pn0\"></p>
					<p class=\"formp\"><label for=\"pn1\">neues Passwort</label><input type=\"password\" id=\"pdn\" name=\"pn1\"></p>
					<input class=\"msgsubmit\" type=\"submit\" value=\"Ändern\">
				</form>
			</div>
		</div>";
?>
