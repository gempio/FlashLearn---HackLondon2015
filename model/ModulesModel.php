<?php 

function displayModules($user)
{
	include 'connect.php';
	$query='Select * from UsersToMods where userID="'.$user.'"';
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)) {
		echo '<div class = "box">';
			$query2='Select * from Modules where modID="'.$row['modID'].'"';
			$result2 = mysqli_query($con,$query2);
			while($row2 = mysqli_fetch_array($result2)) {
				echo "<div class='top_box'><modTitle id = '".$row['modID']."11011".$row2['modName']."' onClick=goToModule(this.id)>".$row2['modName']."</modTitle>";
				echo "<td><deleteB class = 'deletes'  id = '".$row['modID']."' onClick=deleteModule(this.id)>Delete</deleteB></br></div>";
				echo "<div class='description'><p>".$row2['modDesc']."</p></div></br>";
			}
			
	
		echo '</div>';
	}
}

function createModule($userID,$id,$name,$desc)
{		
	include 'connect.php';
	
	$query='Select * from Modules where userID="'.$id.'"';
	$result = mysqli_query($con,$query);
	if($result!=null) return false;
	
	$query1='insert INTO Modules (modID,modName,modDesc) values ("'.$id.'","'.$name.'","'.$desc.'")';
	mysqli_query($con,$query1);
	
	$query2='insert INTO  UsersToMods (userID,modID,admin) values ("'.$userID.'","'.$id.'","1")';
	mysqli_query($con,$query2);
	
}

function displayModule($modID)
{
	$_SESSION = $modID;
	$_SESSION = $modName;
}

function deleteModule($modID)
{
	include 'connect.php';
	
	$sql = "Delete from UsersToMods where modID='".$modID."'";
	$result = mysqli_query($con,$sql);
	$sql = "Delete from Modules where modID='".$modID."'";
	$result = mysqli_query($con,$sql);
	$sql = "Delete from QstToMods where modID='".$modID."'";
	$result = mysqli_query($con,$sql);
	echo "Success";
	//The function will delete 
}

function inviteUser($id,$userID,$theirID,$moduleID,$message)
{
	include 'connect.php';
	
	echo $moduleID;
	
	$query='Select * from Users where userID="'.$theirID.'"';
	$result = mysqli_query($con,$query);
	if(!$result)
	{
		 echo mysqli_error();
		 echo "problem";	
		 return false;
	
	}
	$query1='insert INTO Requests (reqID,fromID,toID,modID,message) values ("'.$id.'","'.$userID.'","'.$theirID.'","'.$moduleID.'","'.$message.'")';
	echo $query1;
	mysqli_query($con,$query1);
		
}

function showRequests($userID)
{
		include 'connect.php';
	$query='Select * from Requests,Modules where toID="'.$userID.'" and Requests.modID = Modules.modID';
	$result = mysqli_query($con,$query);
	if(!$result)
	{
		echo "No pending reuqests";
	}else{
		$i=0;
			echo '<table><tr>
		<th>Name</th>
		<th>Module</th>
		<th>Message</th>
		<th>Accept/Deny</th></tr>';
			while($row = mysqli_fetch_array($result)) {
				echo '<tr><td id>';
				echo $row['fromID'];
				echo "</td><td>";
				echo $row['modName'];
				echo "</td><td>";
				echo $row['message'];
				echo "</td><td>";
				echo '<input type = "button" value="accept" onClick= "allow('."'".$row['reqID']."'".')" />'.'<input type = "button" value="deny" onClick= "deny('."'".$row['reqID']."'".')" />';
				echo '</tr>'; 
	}	echo '</table>';
	}		
}

function acceptRequest($requestID)
{
		include 'connect.php';
		$query='Select * from Requests where reqID="'.$requestID.'"';
		echo $query;
	$result = mysqli_query($con,$query);
	if(!$result)
	{
		echo "No pending reuqests";
	}else{
			while($row = mysqli_fetch_array($result))
				{
				$userID = $row['toID'];
				$moduleID = $row['modID'];
				}	
	}

	$query1='insert INTO UsersToMods (userID,modID,admin) values ("'.$userID.'","'.$moduleID.'","0")';
	echo $query1;
	mysqli_query($con,$query1);
	
	$query2='DELETE FROM Requests where reqID="'.$requestID.'"';
	mysqli_query($con,$query2);
			
		
}

	