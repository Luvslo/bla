<?php
function postwindow($title, $bval) {
echo "
<div id=\"msgfwd\">
	<h1>".$title."</h1>
	<form action=\"newpost.php\" method=\"POST\">
		<p>Empfänger: <input type=\"text\" name=\"dest\"></p>
		<textarea class=\"msgtext\" name=\"content\"></textarea>
		<input type=\"submit\" class=\"msgsubmit\" value=\"".$bval."\">
		<input type=\"hidden\" name=\"user\" value=\"".$GLOBALS["uid"]."\">
	</form>
</div>";
}
