<?php
	if(isset($_POST['Pilih'])){
		$film = $_POST['kartun'];

		echo "Film favorit saudara adalah: <font color=red><b>$film</b></font>";
	}
?>