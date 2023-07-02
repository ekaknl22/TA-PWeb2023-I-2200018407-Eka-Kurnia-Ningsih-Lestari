<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pengolahan form cara #1</title>
</head>
<body>
	<form action="" method="post" name="input">
		Cita-cita anda: <input type="text" name="cita"><br>
		<input type="submit" name="Input" value="Tampilkan isi TextBox">
	</form>
</body>
</html>

<?php
	if(isset($_POST['Input'])){
		$cita = $_POST['cita'];
		echo "Cita-cita anda: <b>". $cita ."</b>";
	}
?>