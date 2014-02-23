<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo "Calendar"; ?></title>
   <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
  <link href ="calCss.css" rel="stylesheet" type="text/css" media="all"/>
   <script language="JavaScript" type="text/javascript">
      function initialCalendar(){
          var hr = new XMLHttpRequest();
          var url = "test2.php";
          var currentTime = new Date();
          var month = currentTime.getMonth()+1;
          var year = currentTime.getFullYear();
          showmonth = month;
          showyear = year;
          var vars = "showmonth="+showmonth+"&showyear="+showyear;
          hr.open("POST", url, true);
          hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          hr.onreadystatechange = function(){
              if(hr.readyState === 4 && hr.status === 200){
                  var return_data = hr.responseText;
                  document.getElementById("showCalendar").innerHTML = return_data;
              }
          }
          hr.send(vars);
          document.getElementById("showCalendar").innerHTML = "processing...";
      }
  </script>
  
  <script language="JavaScript" type="text/javascript">
      function next_month(){
          var nextmonth = showmonth + 1;
          if(nextmonth > 12){
              nextmonth = 1;
              showyear = showyear + 1;
          }
          showmonth = nextmonth;
          var hr = new XMLHttpRequest();
          var url = "test2.php";
          var vars = "showmonth="+showmonth+"&showyear="+showyear;
          hr.open("POST", url, true);
          hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          hr.onreadystatechange = function(){
              if(hr.readyState === 4 && hr.status === 200){
                  var return_data = hr.responseText;
                  document.getElementById("showCalendar").innerHTML = return_data;
              }
          }
          hr.send(vars);
          document.getElementById("showCalendar").innerHTML = "processing...";
      }
  </script>
  
  <script language="JavaScript" type="text/javascript">
      function last_month(){
          var lastmonth = showmonth - 1;
          if(lastmonth < 1){
              lastmonth = 12;
              showyear = showyear - 1;
          }
          showmonth = lastmonth;
          var hr = new XMLHttpRequest();
          var url = "test2.php";
          var vars = "showmonth="+showmonth+"&showyear="+showyear;
          hr.open("POST", url, true);
          hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          hr.onreadystatechange = function(){
              if(hr.readyState === 4 && hr.status === 200){
                  var return_data = hr.responseText;
                  document.getElementById("showCalendar").innerHTML = return_data;
              }
          }
          hr.send(vars);
          document.getElementById("showCalendar").innerHTML = "processing...";
      }
  </script>
  
  <script type="text/javascript">
      function overlay(){
          e1 = document.getElementById("overlay");
          e1.style.display = (e1.style.display == "block") ? "none" : "block";
          e1 = document.getElementById("events");
          e1.style.display = (e1.style.display == "block") ? "none" : "block";
          e1 = document.getElementById("eventsBody");
          e1.style.display = (e1.style.display == "block") ? "none" : "block";
      }
  </script>
  
  <script language="JavaScript" type="text/javascript">
      function show_details(theId){
          var deets = (theId.id);
          e1 = document.getElementById("overlay");
          e1.style.display = (e1.style.display == "block") ? "none" : "block";
          e1 = document.getElementById("events");
          e1.style.display = (e1.style.display == "block") ? "none" : "block";
          var hr = new XMLHttpRequest();
          var url = "events.php";
          var vars = "deets="+deets;
          hr.open("POST",url,true);
          hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          hr.onreadystatechange = function(){
            if(hr.readyState === 4 && hr.status === 200){
                  var return_data = hr.responseText;
                  document.getElementById("events").innerHTML = return_data;
              }
          } 
          hr.send(vars);
          document.getElementById("events").innerHTML = "processing...";
    }
  </script>
  
</head>
<body onLoad="initialCalendar();">
     <div id="wrapper">
            <div id="banner">
                
            </div>
         
      <div id="search_and_login">
                <div id="search">
                        <form name="form1" method="post" action="searchresult.php">
                            <input name="search" type="text" size="10" maxlength="20" />
                            <input type="submit" name="Submit" value="Search"/>
                        </form>
                </div>
                <div id="login">
                    <a href="Login.php">Login</a>
                </div>
            </div>
         
      <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="show_calendar.php">Calendar</a></li>
                    <li><a href="AddingForm.php">Add</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Personal setting</a></li>
                </ul>
      </nav>    
            
    <div id='showCalendar'></div>
    
    <div id="overlay">
        <div id="events"></div>
    </div>
          <footer>
            <p>Group 9 - SENG 403</p>
        </footer>

</body>
</html>



