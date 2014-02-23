
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
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
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            
            
        </div>
        
        <footer>
            <p>Group 9 - SENG 403</p>
        </footer>
    </body>
</html>


