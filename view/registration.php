
<!DOCTYPE html>
<html>
<body>

// Set session variables

<form id='login' action='../controller/RegisterUser.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName/Email:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='nickname' >Nickname:</label>
<input type='text' name='nickname' id='nickname' maxlength="50" /> 
 
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>
<?php

//header("location: http://178.62.88.110/logUserIn.php/LogIn");
?>

</body>
</html>
