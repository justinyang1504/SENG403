<?php
$title='Sign Up';
$content='
    

 <form action="SendNotification.php" method ="POST" >
 Your Name:<font color=red>*</font><br/> <input type="text" name="fullname"/><br/>
 Email:<font color=red>*</font><br/> <input type="text" name="email"/><br/>
 Username:<font color=red>*</font> <br/>  <input type="text" name="uname"/><br/>
 Phone:<br/>      <input type="text" name="phone1" /><br/>
 Password:<font color=red>*</font><br/> <input type="password" name="pass1" /><br/>
 Confirm Password:<font color=red>*</font><br/> <input type = "password" name="pass2"/><br/>
 <input type="submit" value="Register" name="submit"/><br/>
 </form>
 <font color=red>*:required fields</font><br/>
    

';

include 'Template.php';
?>
