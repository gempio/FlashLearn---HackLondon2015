<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</head>
<?php
session_start();
if($_SESSION["userID"]!=null)
{
	//header("location: ../index.php");
		header("location: view/modules.php");
}

?>
<body>

  <div id="wrap">
  <div id="regbar" align = "right">
  	<div id="title" align = "left"><h1>Welcome to Flash Learn!</h1></div>
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a> | <a href="#" id="registerform">Register</a></h2>
    <div class="login">
      <div class="arrow-up" align="right"></div>
      <div class="formholder">
        <div class="randompad" align="left">
           <form id='login' action='../controller/logUserIn.php' method='post' accept-charset='UTF-8'>
             <label name="email" align = "left">Email</label>
             <input type='text' name='username' id='username'  maxlength="50" />
             <label for="password">Password</label>
             <input type='password' name='password' id='password' maxlength="50" />
             <input type='submit' name='Submit' value='Submit' />

           </form>
        </div>
        </div>
      </div>
      
      <div class="register">
      <div class="arrow-up2" align="right"></div>
      <div class="formholder">
        <div class="randompad" align="left">
           <form id='login' action='../controller/RegisterUser.php' method='post' accept-charset='UTF-8'>
					 
			 <label name="email" align = "left">Email</label>
             <input type='text' name='username' id='username'  maxlength="50" />
             <label for="password">Password</label>
             <input type='password' name='password' id='password' maxlength="50" />
             <label for="name">Nickname</label>
             <input type='text' name='nickname' id='nickname' maxlength="50" /> 
             <input type='submit' name='Submit' value='Submit' />
             
			</form>
        </div>
        </div>
      </div>
      
    </div>
    </div>
    
    </div>
    
</div>
	<div style="text-align:center;">
		<huge><div class="element"></div></huge>
		
</div> 
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  
  <?php
  if($_SESSION["error"]!=null)
{
echo $_SESSION['error'];
}
?>
  <script src="js/index.js"></script>
  <script src="js/typed.js"></script>
<script>

  $(function(){
      $(".element").typed({
        strings: ["Would you like to learn fast?", "Then you came to the right place.","Fastest community based learning platform."],
        typeSpeed: 50,
        loop: true,
        showCursor: false
      });
  });
</script>
</body>