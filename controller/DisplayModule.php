<?php
	
	require '../model/connect.php';
	$_SESSION["modID"];
	$query = "select * from Modules where modID='".$_SESSION['modID']."'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	echo "<h3>".$row["modDesc"]."</h3>";
	$sql = "Select * from QstToMods where modID='".$_SESSION['modID']."'";
	$result = mysqli_query($con,$sql);
	$i = 0;
	$weighing = 0;
	while ($row = mysqli_fetch_array($result)) {
		$i++;
		$weighing += $row['weighing'];
	}
	echo "<b>Total Questions for this module: ".$i;
	echo "</br>Total Weighing of these questions are: ".$weighing;
	echo "</b>";
	
	 mysqli_close($con);
?>