<?php

function showModules()
{
include_once '../model/ModulesModel.php';
session_start();
$userid= $_SESSION["userID"];
displayModules($userid);
}
?>
