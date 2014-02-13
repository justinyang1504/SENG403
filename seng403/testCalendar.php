<html>
<head>   
<link href="Styles/Calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
session_start();
if(time() - $_SESSION['time'] > 1200)
{
    session_unset();
    session_destroy();
}
$_SESSION['time'] = time();
if(!isset($_SESSION['uname']))
{
   header('Location:Login.php');
}
require 'Calendar.php';
 
$calendar = new Calendar();
$title = "Calendar";
$content =  '<font color="red" size="5pt">This month schedule:<br/><br/></font>'.$calendar->show();

include 'Template.php';
?>
</body>
</html>     
