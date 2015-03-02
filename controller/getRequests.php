<?php

	include_once 'connect.php';
	
	$userID = $_GET['userID'];
	$query = 'Select * from Requests where 1';  // where toID="'.$userID.'"''
	echo $query;
	$result = mysqli_connect($con,$query);
	echo '<table><tr>
		<th>Name</th>
		<th>Module</th>
		<th>Message</th>
		<th>Accept/Deny</th></tr>';
	while($row = mysqli_fetch_array($result)) {
		echo '<tr><td>';
		echo $row['reqID'];
		echo "</td><td>";
		echo $row['fromID'];
		echo "</td><td>";
		echo $row['toID'];
		echo "</td><td>";
		echo $row['myssage'];
		echo "ENDOFMESSAGE";
		echo '</tr></table>'; 
	}
?>