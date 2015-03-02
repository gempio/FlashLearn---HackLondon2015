<?php

	include '../model/connect.php';
	$modID = $_GET['modID'];
	$query = 'Select * from QstToMods where modID ="'.$modID.'"';
	$result = mysqli_query($con,$query);
	if(!$result) {
		echo "No data";
	}
	while($row = mysqli_fetch_array($result)) {
    	echo $row['qstID'];
		echo "23@10";
		echo $row['qstText'];
		echo "23@10";
		echo $row['qstAnswer'];
		echo "23@10";
		echo $row['weighing'];
		echo "11@0@11";
	}
	
	return true;