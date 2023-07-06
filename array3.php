<?php
	$arrWarna = array("Black","Pink","Brown","Tosca","Olive","Teal");

	echo "Menampilkan isi array dengan FOR: <br>";
	for($i = 0; $i < count($arrWarna); $i++){
		echo "Warna <font color=$arrWarna[$i]>" .$arrWarna[$i]. "</font><br>";
	}

	echo "<br>Menampilkan isi array dengan FOREACH: <br>";
	foreach ($arrWarna as $warna) {
		echo "Warna <font color=$warna>". $warna ."</font><br>";
	}
?>