<?php
include_once '../model/ModulesModel.php';
$request = $_POST['reqID'];
acceptRequest($request);
//header("location: ../view/module.php");
?>