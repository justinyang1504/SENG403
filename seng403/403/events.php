<?php
$deets = $_POST['deets'];
$deets = preg_replace('#[^0-9/]#i', '',$deets);

include ("connect.php");

$events = '';
$query = mysql_query('SELECT * FROM events WHERE evdate = "'.$deets.'"');
$num_rows = mysql_num_rows($query);
if($num_rows > 0){
    $events .= '<div id="eventsControl"><button onMouseDown="overlay()">Close</button><br /><br /><b>'.$deets.'</b><br /><br /></div>';
    while($row = mysql_fetch_array($query)){
        $desc = $row['description'];
        $stime = $row['Stime'];
        $etime = $row['Etime'];
        $loc = $row['location'];
        $mname = $row['Name'];
        $events .= '<div id="eventsBody">'.'Description:&nbsp;'. $desc .'<br/>'; '<br /><hr><br /></div>';
        $events .= 'Start time:&nbsp;'.$stime.'<br/>';
        $events .= 'End time:&nbsp;'.$etime.'<br/>';
        $events .= 'Location:&nbsp;'.$loc.'<br/>';
        $events .= 'Meeting name:&nbsp;'.$mname.'<br /><hr><br /></div>';
    }
}
echo $events;


?>
