<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<?php include 'header.html';?>
		<div id="content">
			<div id="profile">
				<h1>Profil</h1>
				<p class="image"><img src="placeholder.png"></p>
				<p class="name">Niemand</p>
			</div>
			<div id="main">
				<h1>Index</h1>
				<div class="post">
					<div class="postheader">
						<div class="imgcontainer"><img src="placeholder_tiny.png"></div>
						<div class="titlebar">
							<p class="namedate"><a href=""><span class="name">Niemand</span></a><span class="date">19:44 22 Jan 2013</span></p>
							<p class="title">Stefan Zweig in der Wikipedia</p>
						</div>
					</div>
					<div class="postbody"><p>Stefan Zweig wurde als Sohn des wohlhabenden jüdischen Textilunternehmers Moritz Zweig und dessen Gattin Ida Brettauer, Spross eines reichen Kaufmannsgeschlechts aus Hohenems, geboren. Er wuchs gemeinsam mit seinem Bruder Alfred in einer prächtigen Wohnung am Wiener Schottenring auf. Die Familie Zweig war nicht religiös, Zweig selbst bezeichnete sich später als „Juden aus Zufall“. (siehe <a href="http://de.wikipedia.org/wiki/Stefan_Zweig">Wikipedia</a>)</p>
					</div>
					<div class="postfooter">
						<p>
							<a href=""><img src="img/forward.png"></a>
							<a href=""><img src="img/answer.png"></a>
							<a href=""><img src="img/comment.png"></a>
						</p>
					</div>
				</div>
				<div class="post">
					<div class="postheader">
						<div class="imgcontainer"><img src="klein.png"></div>
						<div class="titlebar">
							<p class="namedate"><a href=""><span class="name">Stefan Zweig</span></a><span class="date">20:03 22 Jan 2013</span></p>
						</div>
					</div>
					<div class="postbody"><p>Mensch, ich bin ja sogar in der Wikipedia!</p></div>
					<div class="postfooter">
						<p>
							<a href=""><img src="img/forward.png"></a>
							<a href=""><img src="img/answer.png"></a>
							<a href=""><img src="img/comment.png"></a>
						</p>
					</div>
				</div>
				<form>
					<div class="send">
						<textarea></textarea>
						<input type="submit" value="Senden">
					</div>
				</form>
			</div>
			<div id="left">
				<h1>Freunde</h1>
				<div class="friends">
					<p class="friend"><a href="">Stefan Zweig</a></p>
					<p class="friend"><a href="">Thomas Mann</a></p>
				</div>
				<h1>Gruppen</h1>
				<div class="groups">
					<p class="group"><a href="">Schriftsteller</a></p>
				</div>
			</div>
		</div>
	</body>
</html>
