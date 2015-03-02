<?php

include '../model/connect.php';
$modID = $_GET['modID'];
$sql = "Select * from QstToMods where modID='".$modID."'";
	$result = mysqli_query($con,$sql);

if(!$result) {
	echo mysqli_error($con);
}
while($row = mysqli_fetch_array($result)) {
	echo $row['qstText'];
	echo "BREAKBREAKBREAK";
	echo $row['qstAnswer'];
	echo "EndQuestion1111.";
}
?>