<?php

	$servername = "178.62.88.110";
	$username = "root";
	$password = "password";
	
	$con = mysqli_connect($servername,$username,$password,"HackLondon",3306);
	
	if(!$con) echo "error connecting";
?>
