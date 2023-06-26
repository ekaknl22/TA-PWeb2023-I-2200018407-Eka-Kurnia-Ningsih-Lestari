<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas 10.2.2</title>
</head>
<body>
	<?php
		$bintang=5;
		for( $a = $bintang; $a > 0; $a--){
			for($i = 1; $i <= $a; $i++){
				echo "&nbsp";
			}
			for($a1 = $bintang; $a1 >= $a; $a1--){
				echo "*";
	 		}
			echo"<br>";
		}
	?>
</body>
</html>