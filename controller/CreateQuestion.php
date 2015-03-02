<?php
	include_once '../model/QuestionsModel.php';
	session_start();
	//nameandmoduledescription and hash it. 
	$modID= $_SESSION["modID"];
	$qstName = $_POST['qstText'];
	$qstAnswer= $_POST['qstAnswer'];
	$weighing = $_POST['qstWeight'];
	$random = rand(0,10000000000000000);
	$id = md5($random);
	createQuestion($modID,$qstName,$qstAnswer,$id,$weighing);
	header("location: ../view/module.php");
?>