<?php
	function tambah_string(&$str){
		$str = $str. ", Yogyakarta";
		return $str;
	}

	$string = "Bantul";
	echo "\$string = $string<br>";
	echo tambah_string($string). "<br>";
	echo "\$string = $string<br>";
?>