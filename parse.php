<?php
function parse ($str) {
	if (substr($str,0,1) == "[") {
		$str = str_replace("[","<span class=\"ans\">",$str);
		$str = str_replace("]","</span>",$str);
		$str = str_replace(": ",":<br>",$str);
	}
	//$str = str_replace("\n","<br>",$str);
	return $str;
}