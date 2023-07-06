<?php
	$arrNilai=array("Eka"=>80,"Dwi"=>98,"Fitri"=>99,"Ai"=>50);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	sort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan sort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	arsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan arsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "<pre>";
?>
