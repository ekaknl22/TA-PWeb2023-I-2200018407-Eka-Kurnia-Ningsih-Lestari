<?php
	function luas_segitiga($alas, $tinggi){
		return 1/2*$alas*$tinggi;
	}

	$alas = 10;
	$tinggi = 5;
	echo "Luas segitiga dengan alas $alas dan tinggi $tinggi = ";
	echo luas_segitiga($alas, $tinggi);
?>