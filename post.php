<?php
function post ($name, $time, $content) {
$df = include("dateformat.php");
echo "<div class=\"post\">
	<div class=\"postheader\">
		<div class=\"imgcontainer\"><img src=\"placeholder_tiny.png\"></div>
		<div class=\"titlebar\">
			<p class=\"namedate\"><a href=\"\"><span class=\"name\">".$name."</span></a><span class=\"date\">".date($df,$time)."</span></a></p>
			<div class=\"usermenu\">
				<p>
					<a class=\"posticon\" href=\"\"><img src=\"img/bookmark.png\" class=\"inormal\"><img src=\"img/bookmarka.png\" class=\"ihover\"></a>
					<span class=\"tooltip\">Merken</span>
					<a class=\"posticon\" href=\"\"><img src=\"img/view.png\" class=\"inormal\"><img src=\"img/viewa.png\" class=\"ihover\"></a>
					<span class=\"tooltip\">Ansehen</span>
					<a class=\"posticon\" href=\"\"><img src=\"img/write.png\" class=\"inormal\"><img src=\"img/writea.png\" class=\"ihover\"></a>
					<span class=\"tooltip\">Nachricht</span>
					<a class=\"posticon\" href=\"\"><img src=\"img/abo.png\" class=\"inormal\"><img src=\"img/aboa.png\" class=\"ihover\"></a>
					<span class=\"tooltip\">Empfangen</span>
				</p>
			</div>
		</div>
	</div>
	<div class=\"postbody\"><p>".$content."</p>
	</div>
	<div class=\"postfooter\">
		<p>
			<a class=\"posticon\" href=\"\"><img src=\"img/forward.png\" class=\"inormal\"><img src=\"img/forwarda.png\" class=\"ihover\"></a>
			<span class=\"tooltip\">Weiterleiten</span>
			<a class=\"posticon\" href=\"\"><img src=\"img/answer.png\" class=\"inormal\"><img src=\"img/answera.png\" class=\"ihover\"></a>
			<span class=\"tooltip\">Antworten</span>
			<a class=\"posticon\" href=\"\"><img src=\"img/comment.png\" class=\"inormal\"><img src=\"img/commenta.png\" class=\"ihover\"></a>
			<span class=\"tooltip\">Kommentieren</span>
		</p>
	</div>
</div>
";
}
?>
