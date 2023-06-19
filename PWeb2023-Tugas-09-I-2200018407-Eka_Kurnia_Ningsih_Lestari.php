<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$gaji = 1000000;
		$pajak = 0.1;
		$thp = $gaji - ($gaji * $pajak);

		echo "Gaji sebelum pajak = Rp. $gaji <br>";
		echo "Gaji yang dibawa pulang = Rp. $thp";
	?>

	
</body>
</html>