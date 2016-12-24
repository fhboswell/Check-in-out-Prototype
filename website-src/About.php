
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Sailing Camp</title>
  <script src="script.js"></script>
  <div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Sailing Camp</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="roster.php">Roster</a></li>
          <li><a href="search.php">Search</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sailing Levels<b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="white.php">White Sail</a></li>
              <li><a href="bronze.php">Bronze Sail</a></li>
              <li><a href="silver.php">Silver Sail</a></li>
              <li><a href="gold.php">Gold Sail</a></li>
              <li class="divider"></li>
              <li><a href="new.php">New Check In</a></li>
             
            </ul>
          </li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  </head>
  <body>
  <!-- Begin page content -->
  <<div class="container">
      <div class="row">
        <div class="col-md-7">
         
            <div class="page-header">
      <h1>Currently Checked In For Gold Sail</h1>
    </div>
            
    <table style="width:100%">
    <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
   
    
    </tr>
    <?php
    $con=mysqli_connect('setapproject.org','csc412','csc412','csc412');
    if (mysqli_connect_errno($con)) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con,"SELECT * FROM fboswell");
    while($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";
        echo $row['Name'];
        echo "</td><td>";
        echo $row['Body'];
        echo "</td></tr>";
        
    }
    mysql_close($conn);
    ?>
    </table>
        </div>
        <div class="col-md-5">
            
              <div class="row">
                <div class="col-sm-6">
                        
        	      	 <img src="images/Sailing1.jpg" width="360" height="240" id="myPicture" alt="Sailing Picture" class = "img-rounded">
                </div>
               
              </div>
            
        </div>
      </div> 
  </div><!--/container-->
  
  
</div>


  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style-code.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<div id="footer">
  <div class="container">
    </div>
</div>