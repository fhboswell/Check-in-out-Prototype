
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Sailing Camp</title>
  <script src="script.js"></script>
  <style type="text/css">
   body { background: lightcyan !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
     <link rel="stylesheet" href="style-code.css"> 
  </head>
  <div class="container">
    <nav class="navbar navbar-dark bg-primary navbar-top">
        <a class="navbar-brand" href="#">Sailing Camp</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="roster.php">Roster</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Sailing Levels</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"  href="white.php">White Sail</a>
                        <a class="dropdown-item" href="bronze.php">Bronze Sail</a>
                        <a class="dropdown-item" href="silver.php">Silver Sail</a>
                        <a class="dropdown-item" href="gold.php">Gold Sail</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About</a>
                </li>
            </ul>
  
    </nav>
  </div>
  
  <body>
  <!-- Begin page content -->
  
  <div  class="container">
      <div class="row">
        <div class="col-md-7">
             <div class="page-header">
      <h1>Local Forcast</h1>
    </div>
      
            <a href="http://www.accuweather.com/en/ca/port-carling/p0b/sailing-current-weather/2290749" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awtd1481552433107" class="aw-widget-36hour"  data-locationkey="2290749" data-unit="f" data-language="en-us" data-useip="false" data-uid="awtd1481552433107" data-editlocation="false" data-lifestyle="sailing"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
        </div>
          
          
        <div class="col-md-5">
            
              <div class="row">
                <div class="col-sm-6">
                        
        	      	 <img src="images/Sailing1.jpg" width="360" height="240" id="myPicture" alt="Sailing Picture" class = "rounded">
                </div>
               
              </div>
            
        </div>
      </div> 
  </div><!--/container-->
  

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  </body>


<div id="footer">
  <div class="container">
    </div>
</div>
  
  </html>
