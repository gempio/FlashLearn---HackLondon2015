<?php include_once '../model/UserModel.php';
$pass = md5($_POST['password']);

$user = $_POST['username'];
if(logIn($user,$pass) ==true)
{
		echo 'logged in';
		//Redirect the user to the logged in page.
// Start the session
$nickname = getNickName($user);



session_start();
$_SESSION["userID"] = "$user";
$_SESSION["nickname"] = "$nickname";
		header("location: ../view/modules.php");
		
}else{
	echo 'false ID or pass';
		session_start();
	$_SESSION["error"] = "Log In failed";
	header("location: ../index.php");		
}
?>