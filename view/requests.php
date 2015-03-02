<head>
	<link rel="stylesheet" type="text/css" href="../css/modules.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</head>
<body>
	<div id="wrap">
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Flash Learn - Requests</h1></div>
    <div id="navthing">
      <h2><a href="../" id="">Home</a> |<a href="../view/createModule.php" id="">Add Module</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    </div>
    
    </div>
    
</div>
	<div style="text-align:center;">
		<?php
			include_once '../model/ModulesModel.php';
			session_start();
			$userID = $_SESSION["userID"];
			showRequests($userID);				
		?>
		
</div> 
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="../js/requests.js"></script>
  <script src="../js/modules.js"></script>
</body>