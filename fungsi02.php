<?php
	function cetak_genap($awal, $akhir){
		for($i = $awal; $i < $akhir; $i++){
			if($i%2 == 0){
				echo "$i, ";
			}
		}
	}

	$a = 1;
	$b = 50;
	echo "<b>Bilangan genap dari $a sampai $b, adalah:</b><br>";
	cetak_genap($a,$b);
?>