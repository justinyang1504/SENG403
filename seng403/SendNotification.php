<?php
require 'Credentials.php';

if(isset($_POST['submit'])){
    if(empty($_POST['fullname']) or empty($_POST['email']) or empty($_POST['uname'])
            or empty($_POST['phone1']) or empty($_POST['pass1']) or empty($_POST['pass2']))
    {
        header('Location: SignUp.php');
    }
    else
    {
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
    }
    
    if($pass1 != $pass2)
    {
        echo "Password doesnt match <br/>";
        exit();
    }
    else
    {
        $con = mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database,$con);
        $Fname = mysql_real_escape_string($_POST['fullname']);
        $Email = mysql_real_escape_string($_POST['email']);
        $Username = mysql_real_escape_string($_POST['uname']);
        $Phone = mysql_real_escape_string($_POST['phone1']);
        $Password = md5($pass1);
        
        $sql = mysql_query("SELECT * FROM users Where Username = '$Username' ");
        if(mysql_num_rows($sql)>0)
        {
            echo "User already exists";
            //header('Location:SignUp.php');
        }
        else{
        mysql_query("INSERT INTO users(Fname,Email,Username,Phone,Password) VALUES
                ('$Fname','$Email','$Username','$Phone','$Password')");
        
        mysql_close();
        header('Location:Login.php');
        }
    }
}





?>
