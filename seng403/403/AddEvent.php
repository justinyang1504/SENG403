<?php
require 'Credentials.php';

if(isset($_POST['submit'])){
    //if(empty($_POST['Mname']) or empty($_POST['Stime']) or empty($_POST['Etime'])
      //     or empty($_POST['date']) or empty($_POST['location']) or empty($_POST['Mcontent']))
   // {
    //    header('Location: AddingForm.php');
   // }
   // else
   // {
      //   $date = trim($_POST['date']);
       //  $regex = '/^((([1-2][0-9])|([1-9]))/([2])/[0-9]{4})|((([1-2][0-9])|([1-9])|(3[0-1]))/((1[0-2])|([3-9])|([1]))/[0-9]{4})$/';
   // }
//}
 $con = mysql_connect($host, $user, $passwd) or die(mysql_error);
 mysql_select_db($database,$con);
 $Mname = mysql_real_escape_string($_POST['Mname']);
 $Stime = mysql_real_escape_string($_POST['Stime']);
 $Etime = mysql_real_escape_string($_POST['Etime']);
 $Date = mysql_real_escape_string($_POST['date']);
 $Location = mysql_real_escape_string($_POST['location']);
 $Mcontent = mysql_real_escape_string($_POST['Mcontent']);
 echo $Mname . $Stime . $Etime . $Date . $Location . $Mcontent;
 mysql_query("INSERT INTO events(evdate,description,Stime,Etime,location,Name) VALUES
                ('$Date','$Mcontent','$Stime','$Etime','$Location','$Mname')");
        
 mysql_close();
header('Location:show_calendar.php');
}else{
    echo "Failed";
}
 
?>
