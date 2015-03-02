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
function getModsUser($userr) {
	include 'connect.php';
	$user = $userr;
	$query = 'Select * from UsersToMods,Modules where userID ="'.$user.'" AND UsersToMods.modID = Modules.modID';
	$result = mysqli_query($con,$query);
	if(!$result) {
		return false;
	}
	while($row = mysqli_fetch_array($result)) {
    	echo $row['modID'];
		echo "23@10";
		echo $row['modName'];
		echo "23@10";
		echo $row['modDesc'];
		echo "11@0@11";
	}
	
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
}
}

function getNickName($userID)
{
	include 'connect.php';
	$query='Select * from Users where userID="'.$userID.'"';
	echo $query;
	$result = mysqli_query($con,$query);
if(!$result) {
	return false;

}
$row = mysqli_fetch_array($result);
	return $row['nick'];
	
}

?>

