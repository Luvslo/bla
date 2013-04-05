<div id="main">
	<h1>Alles<a href="#msgfwd"><img src="img/writeb.png"></a></h1>
	<?php
		include("postwindow.php");
		//post("Niemand",1365078659,"Stefan Zweig wurde als Sohn des wohlhabenden jüdischen Textilunternehmers Moritz Zweig und dessen Gattin Ida Brettauer, Spross eines reichen Kaufmannsgeschlechts aus Hohenems, geboren. Er wuchs gemeinsam mit seinem Bruder Alfred in einer prächtigen Wohnung am Wiener Schottenring auf. Die Familie Zweig war nicht religiös, Zweig selbst bezeichnete sich später als „Juden aus Zufall“. (siehe <a href=\"http://de.wikipedia.org/wiki/Stefan_Zweig\">Wikipedia</a>)");
	$sql = "SELECT content, time, name FROM post, user WHERE (dest=".$uid." OR src=".$uid.") AND src=uid ORDER BY time DESC";
	$res = $db->query($sql);
	while ($row = $res->fetch_assoc()) {
		post($row['name'], $row['time'], $row['content']);
	}
	postwindow("Neue Nachricht schreiben","Senden");
	?>
</div>
