<head>
	<link rel="stylesheet" type="text/css" href="../css/modules.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</head>
<body>
	<div id="wrap">
		<?php
			session_start();
			echo '<p style = "display:none" id="userID">'.$_SESSION['userID'].'</p>';
			echo '<p style = "display:none" id="modID">'.$_SESSION['modID'].'</p>';
			//echo $_SESSION["userID"];
		?>
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Flash Learn - Your Module</h1></div>
    <div id="navthing">
      <h2><a href="#" id="loginform">Invite</a> |<a href="../view/modules.php" id="">Modules</a> | <a href="../view/createQuestion.php" id="">Add Question</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    
    <div class="login">
      <div class="arrow-up" align="right"></div>
      <div class="formholder">
        <div class="randompad" align="left">
           <form id='login' action='../controller/inviteFriends.php' method='post' accept-charset='UTF-8'>
             <label name="email" align = "left">Friends': Email</label>
             <input type='text' name='theirID' id='theirID'  maxlength="50" />
             <label for="text">Welcoming message:</label>
             <input type='text' name='message' id='message' maxlength="50" />
             <input type='submit' name='Submit' value='Submit' />

           </form>
        </div>
        </div>
      </div>
    
    </div>
    
    </div>
    
</div>
	<div style="text-align:center;" id="container">
		
		<?php
		
			echo "<h2>Module: ".$_SESSION["modName"]."</h2>";
			include_once '../controller/DisplayModule.php';
		?>
</div> <div style="text-align:center;">
</br>
	<input type = "button" value ="See All Questions" onClick = 'window.location.replace("../view/allQuestions.php")'></input>
		<input type = "button" value = "Revise Using FlashCards" onClick = 'window.location.replace("../view/flashcards.php")'></input>
		<input type = "button" value = "Generate an Exam" onClick = "exam()"></input>
	
</div>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="../js/index.js"></script>
  <script src="../js/exam.js"></script>
  <script src="../js/modules.js"></script>
</body>