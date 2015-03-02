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
  	<div id="title" align = "left"><h1>Flash Learn - Add a question</h1></div>
    <div id="navthing">
      <h2><a href="../view/module.php" id="">Module</a> | <a href="../view/createQuestion.php" id="">Add Question</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    </div>
    
    </br><huge>Create a question for module: <?php echo $_SESSION['modName'] ?></huge>

<div class="formholder2">
        <div class="randompad2" align="left">
             <form id='login' action='../controller/CreateQuestion.php' method='post' accept-charset='UTF-8'>
			<fieldset >
			<input type='hidden' name='submitted' id='submitted' value=<?php echo "'".$_SESSION['modID']."'"; ?> />
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			
			 
			<label for='nickname' >Question Text:</label>
			<input type='text' name='qstText' id='qstText' maxlength="50" /> 
			 
			<label for='password' >Question Answer:</label>
			<textarea name='qstAnswer' id='qstAnswer' rows="4" cols="50"></textarea>
			
			<label for="weighing" >Question Weighing:</label>
			<input type='text' name='qstWeight' id='qstWeight' maxlength="50" /> 
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
