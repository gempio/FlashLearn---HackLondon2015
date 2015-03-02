<?php

	function createQuestion($modID,$qstName,$qstAnswer,$id,$weighing) {
		include 'connect.php';
		
		$query = "Insert into QstToMods(modID,qstID,pending,weighing,qstText,qstAnswer) values ('".$modID."','".$id."','0','".$weighing."','".$qstName."','".$qstAnswer."');";
		echo $query;
		$result = mysqli_query($con,$query);
	}

?>
