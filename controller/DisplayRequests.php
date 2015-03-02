<?php
			include_once '../model/ModulesModel.php';
			session_start();
			$userID = $_SESSION["userID"];
			showRequests($userID);				
?>