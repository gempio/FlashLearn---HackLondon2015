<?php
include_once '../model/ModulesModel.php';
session_start();
//nameandmoduledescription and hash it. 
$userid= $_SESSION["userID"];
$to = $_POST['theirID'];
$module= $_SESSION["modID"];
$message = $_POST['message'];
$random = rand(0,10000000);
$id = md5($random);
echo $id,$userid,$to,$module,$message;
inviteUser($id,$userid,$to,$module,$message);
header("location: ../view/module.php");
?>