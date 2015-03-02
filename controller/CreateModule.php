<?php
include_once '../model/ModulesModel.php';
session_start();
//nameandmoduledescription and hash it. 
$userid= $_SESSION["userID"];
$name = $_POST['modName'];
$desc= $_POST['modDesc'];
$random = rand(0,10000000);
$id = md5($random);
echo $userid,$name,$desc,$id;
createModule($userid,$id,$name,$desc);
header("location: ../view/modules.php");
?>
