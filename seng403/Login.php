<?php
$title = "Login";
$content='
<font color="red" size="6pt">Please enter username and password</font><br/><br/><br/>
<table>

 <tr> 
<form action="checkLogin.php" method ="POST">
 <td>Username:</td> <td><input type="text" name="username"/></td>
 </tr>
 <tr>
 <td>Password:</td> <td><input type="password" name="pass" />&nbsp;<a href="getPassword.php">Forget Password?</a></td>
 </tr>
 <tr>
 <td><input type="submit" value="Log in" name="LogIn"/></td>
 </form>
 <form action="SignUp.php" method ="POST">
 <td><input type="submit" value="Sign up" name="SignUp"></td>
 </tr>

</table>
';

include 'Template.php';

?>
