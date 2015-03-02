<?php
	require '../model/connect.php';
	$_SESSION["modID"];
	$sql = "Select * from QstToMods where modID='".$_SESSION['modID']."'";
	$result = mysqli_query($con,$sql);
	
	
	echo "<table align = 'center'>";
	echo "<th>Question</th><th>Answer</th><th>Weighing</th><th>Delete</th>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['qstText']."</td>";
		echo "<td>".$row['qstAnswer']."</td>";
		echo "<td>".$row['weighing']."</td>";
		echo "<td><dQ id = '".$row['modID'].$row['qstID']."' onClick = 'deleteQ(this.id)'>X</dQ>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	 mysqli_close($con);
?>