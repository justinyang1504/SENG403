<?php
require 'Credentials.php';

if(isset($_POST["submit"])){
    if(empty($_POST['username']) or empty($_POST['pass']) )
    {
        header('Location:Login.php');
    }
 else 
    {
       $con= mysql_connect($host, $user, $passwd) or die(mysql_error);
       mysql_select_db($database,$con);
       $username = mysql_real_escape_string($_POST['username']);
       $pass = mysql_real_escape_string($_POST['pass']);
       $pass = md5($pass);
       $sql = mysql_query("SELECT * FROM users WHERE Username = '$username' AND Password='$pass' ");
       if(mysql_num_rows($sql) > 0)
            {   
                session_start();
                $_SESSION['uname'] = $_POST['username'];
                $_SESSION['time'] = time();
                mysql_close();
                header('Location: Calendar.php');
            }
 else {
      mysql_close();
      Echo "<a href=Login.php>Go back to login Page</a>";
    
 }
     }
     
     
 
}

?>
