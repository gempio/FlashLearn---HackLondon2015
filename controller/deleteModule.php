<?php 
include_once '../model/ModulesModel.php';
$modID = $_POST['modID'];
echo $modID;

deleteModule($modID);

?>