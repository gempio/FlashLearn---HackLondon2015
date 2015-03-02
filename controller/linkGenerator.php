<?php
include_once '../model/ModulesModel.php';
$modID = $_GET['modID'];
$modName = $_GET['modName'];
echo $modID;
echo $modName;
displayModule($moduleid);
session_start();
$_SESSION['modID'] = $modID;
$_SESSION['modName'] = $modName;
?>