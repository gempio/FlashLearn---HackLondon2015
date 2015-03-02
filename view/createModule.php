<!DOCTYPE html>
<html>
<body>



<?php
session_start();
if($_SESSION["userID"]==null)
{
	//header("location: ../index.php");
		header("location: ../view/modules.php");
}

?>

</body>
</html>


<head>
	<link rel="stylesheet" type="text/css" href="../css/modules.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</head>
<body>
	<div id="wrap">
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Flash Learn</h1></div>
    <div id="navthing">
      <h2><a href="../" id="">Home</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    </div>
    
    <huge>Create Module</huge>

<div class="formholder2">
        <div class="randompad2" align="left">
             <form id='login' action='../controller/CreateModule.php' method='post' accept-charset='UTF-8'>
			<fieldset >
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			
			 
			<label for='nickname' >Module Name:</label>
			<input type='text' name='modName' id='modName' maxlength="50" /> 
			 
			<label for='password' >Module Description:</label>
			<textarea name='modDesc' id='modDesc' rows="4" cols="50"></textarea>
			
			<input type='submit' name='Submit' value='Submit' />
			
			</fieldset>
			</form>
        </div>
    </div>
    </div>
    	

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>
  <script src="js/typed.js"></script>
</body>
