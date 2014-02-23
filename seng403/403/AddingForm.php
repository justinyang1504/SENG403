<?php
$title ="Add Event";
$content='
<form action="AddEvent.php" method ="POST">
<font color="red" size="6pt">Please enter all the required fields</font>
    <table>
 <tr>
 <td>Meeting name:<font color=red>*</font></td><td><input type="text" name="Mname" placeholder="Meeting Name"/> </td>
 </tr> 
 <tr>
     <td>Time:<font color=red>*</font></td><td><input type="text" name="Stime" placeholder="HH:MM AM/PM"/>&nbsp;&nbsp;&nbsp;to&nbsp;&nbsp;&nbsp;<input type="text" name="Etime" placeholder="HH:MM AM/PM"/></td>
 </tr> 
 <tr>
 <td>Date:<font color=red>*</font></td><td><input type="text" name="date" placeholder="MM/DD/YYYY"/></textarea</td>
 </tr> 
 <tr>
     <td>Location:<font color=red>*</font></td><td><input type="text" name="location" placeholder="Location"/></td>
 </tr> 
 <tr>
 <td>Meeting content:<font color=red>*</font></td><td><textarea name="Mcontent" placeholder="Meeting Description" rows="5" cols="40"></textarea></td>
 </tr> 
 <tr>
      <td align="right"><input type="submit" value="Add Event" name="submit"/></td>
 </tr>
 </table>   
 <font color=red>*:required fields</font><br/>
';
include 'Template.php';

?>

