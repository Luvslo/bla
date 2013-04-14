<?php
function answer ($ref) {
$sql = "SELECT content, name FROM post, user WHERE pid=? AND src=uid";
$db = $GLOBALS['db'];
$stmt = $db->prepare($sql);
$stmt->bind_param('i',$ref);
$stmt->execute();
$stmt->bind_result($content,$name);
$stmt->fetch();
$content = $name.": [".$content."]\n";
echo "
<div id=\"main\">
<div class=\"centerbox\">
	<div class=\"close\">
		<a href=\"main.php\">
			<img src=\"img/close.png\">
		</a>
	</div>
	<div id=\"msgfwd\">
		<h1>Antworten</h1>
		<form action=\"newpost.php\" method=\"POST\">
			<textarea class=\"msgtext\" name=\"content\">".$content."</textarea>
			<input type=\"submit\" class=\"msgsubmit\" value=\"Antworten\">
			<input type=\"hidden\" name=\"user\" value=\"".$GLOBALS["uid"]."\">
			<input type=\"hidden\" name=\"ref\" value=\"".$ref."\">
			<input type=\"hidden\" name=\"type\" value=\"1\">
		</form>
	</div>
</div>
</div>";
}
