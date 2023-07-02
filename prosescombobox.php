<?php
	if(isset($_POST['Pilih'])){
		$film = $_POST['kartun'];
		echo "Film favorit saudara adalah: <font color=blue><b>$film</b></font>";
	}