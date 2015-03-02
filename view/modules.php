<head>
	<link rel="stylesheet" type="text/css" href="../css/modules.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</head>
<body>
	<div id="wrap">
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Flash Learn - Modules</h1></div>
    <div id="navthing">
      <h2><a href="../view/requests.php" id="">Requests</a> |<a href="../view/createModule.php" id="">Add Module</a> | <a href="../controller/logUserOut.php" id="loginform">Logout</a>
    </div>
    </div>
    
    </div>
    
</div>
	<div style="text-align:center;">
		<?php
		session_start();
		//echo $_SESSION["userID"];?><?php
		echo "<h2>Hello ".$_SESSION["nickname"]."</h2>";
		include '../controller/DisplayModules.php';
		showModules();
		?>
		
</div> 
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="../js/index.js"></script>
  <script src="../js/modules.js"></script>
</body>