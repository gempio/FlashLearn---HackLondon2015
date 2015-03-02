<?php include_once '../model/AndroidModel.php';

$pass = md5($_GET['password']);

$user = $_GET['username'];

if(logIn($user,$pass) ==true)
{
	echo getModsUser($user);
}else{
	echo 'Incorrect';
}
?>