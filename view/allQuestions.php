<head>
	<link rel="stylesheet" type="text/css" href="../css/modules.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</head>
<body>
	<div id="wrap">
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Flash Learn - Your Module</h1></div>
    <div id="navthing">
      <h2><a href="../view/modules.php" id="">Modules</a> | <a href="../view/module.php" id="">Current Module</a> | <a href="../view/createQuestion.php" id="">Add Question</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    </div>
    
    </div>
    
</div>
	<div style="text-align:center;">
		<?php
			session_start();
			//echo $_SESSION["userID"];
		?>
		<?php
			
			echo "<h2>Module: ".$_SESSION["modName"]."</h2>";
			include_once '../controller/DisplayQuestions.php';
		?>
</div> <div style="text-align:center;">
</br>
	<input type = "button" value ="See All Questions" onClick = 'window.location.replace("../view/allQuestions.php")'></input>
		<input type = "button" value = "Revise Using FlashCards" onClick = 'window.location.replace("../view/flashcards.php")'></input>
	
</div>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="../js/index.js"></script>
  <script src="../js/modules.js"></script>
</body>