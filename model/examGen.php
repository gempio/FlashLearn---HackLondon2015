<?php

require 'connect.php';
$modID = $_GET['modID'];
$num = $_GET['num'];
$sql = "Select * from QstToMods where modID='".$modID."' and weighing>".$num;
$result = mysqli_query($con,$sql);
if(!$result) {
	echo "Problem with connection";
}
while($row = mysqli_fetch_array($result)) {
	echo $row['qstText'];
	echo "BREAKBREAKBREAK";
	echo $row['qstAnswer'];
	echo "BREAKBREAKBREAK";
	echo $row['weighing'];
	echo "EndQuestion1111.";
}
?>