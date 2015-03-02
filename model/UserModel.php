<?php

function logIn($userr,$pass)
{
include 'connect.php';
$user = $userr;
$query = 'Select * from Users where userID ="'.$user.'" And password="'.$pass.'"';
$result = mysqli_query($con,$query);
if(!$result) {
	//echo mysqli_error($con);
	return false;
	//header("location: http://178.62.88.110/logUserIn.php/LogIn");
}
$row = mysqli_fetch_array($result);
if($row['userID'] == null) return false;
return true;

}

function registerUser($email,$pass,$nickname)
{
	include 'connect.php';
	$query='insert INTO Users (userID,password,nick) values ("'.$email.'","'.$pass.'","'.$nickname.'")';
	$result = mysqli_query($con,$query);
if(!$result) {
	//echo mysqli_error($con);
	return false;
	//header("location: http://178.62.88.110/logUserIn.php/LogIn");
}else{
	return true;
}
}

function getNickName($userID)
{
	include 'connect.php';
	$query='Select * from Users where userID="'.$userID.'"';
	$result = mysqli_query($con,$query);
if(!$result) {
	return false;

}
$row = mysqli_fetch_array($result);
	//$nickname =  $row['nick'];
	return $row['nick'];
	
}

?>

