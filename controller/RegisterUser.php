<?php
include_once '../model/UserModel.php';
$pass = md5($_POST['password']);
$nick = $_POST['nickname'];
$email = $_POST['username'];
echo $email,$pass,$nick;

	if($email!=null)
	{
	if(registerUser($email,$pass,$nick)==false)
		{
			echo "invalid registration";
			session_start();
			$_SESSION["error"] = "Email address already in use.";
			header("location: ../index.php");
		}else{
			session_start();
			$_SESSION["userID"] = $email;
			$_SESSION["nickname"] = $nick;
			header("location: ../view/modules.php");
			}
	}
?>
