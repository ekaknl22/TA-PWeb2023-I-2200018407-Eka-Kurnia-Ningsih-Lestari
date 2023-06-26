<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas 10.2.1</title>
</head>
<body>
	<form method="post" action="">
		Masukkan nilai anda: 
		<input type="text" name="nilai"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nilai = $_POST['nilai'];

			if($nilai >= 0 && $nilai <= 39.99){
				echo "Nilai anda E, anda GAGAL";
			}else if($nilai >= 40 && $nilai <=43.74){
				echo "Nilai anda D";
			}else if($nilai >= 43.75 && $nilai <=51.24){
				echo "Nilai anda D+, anda GAGAL";
			}else if($nilai >= 51.25 && $nilai <= 54.99){
				echo "Nilai anda C-, anda GAGAL";
			}else if($nilai >= 55.00 && $nilai <= 57.49){
				echo "Nilai anda C, anda LULUS";
			}else if($nilai >= 57.50 && $nilai <= 62.49){
				echo "Nilai anda C+, anda LULUS";
			}else if($nilai >= 62.50 && $nilai <= 64.99){
				echo "Nilai anda B-, anda LULUS";
			}else if($nilai >= 65.00 && $nilai <= 68.74){
				echo "Nilai anda B, anda LULUS";
			}else if($nilai >= 68.75 && $nilai <= 76.24){
				echo "Nilai anda B+, anda LULUS";
			}else if($nilai >= 76.25 && $nilai <= 79.99){
				echo "Nilai anda A-, anda LULUS";
			}else if($nilai >= 80 && $nilai <= 100){
				echo "Nilai anda A, anda LULUS";
			}
		}
	?>
</body>
</html>