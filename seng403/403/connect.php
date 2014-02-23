<?php
    $hostname = "localhost";
    $username = "root";
    $password = "Long2608";
    $dbname = "403db";
    $error = "Cant connect to database";
 
    mysql_connect($hostname,$username,$password) or die ($error);
    mysql_select_db($dbname) or die($error);
?>


