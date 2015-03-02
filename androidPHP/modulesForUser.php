<?php
	
	include_once '../model/AndroidModel.php';
	$pass = $_GET['password'];
	
	$user = $_GET['username'];
	if(getModsUser($user) ==true)
	{
		
	} else {
		echo 'no data';
	}
?>