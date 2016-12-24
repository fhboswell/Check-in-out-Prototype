<?php
   if( $_GET["name"] || $_GET["body"] ) {
       
       $name = $_GET['name'];
       $body = $_GET['body'];
       
       
       
       
       $con=mysqli_connect('setapproject.org','csc412','csc412','csc412');
    if (mysqli_connect_errno($con)) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con,"SELECT * FROM fboswell3 WHERE rfid = '$body'");
       
       
       
       
       
       $row_cnt = mysqli_num_rows($result);
       
       if($row_cnt < 1){
       
       
       
       $dbhost = 'setapproject.org';
        $dbuser = 'csc412';
        $dbpass = 'csc412';
        $dbname = "csc412";
        $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
       
       $sql = "INSERT INTO fboswell2".
       "(id,info) ".
       "VALUES".
       "('$name','$body')";
        mysql_select_db('csc412');
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
          {
             die('Could not enter data: ' . mysql_error());
        }
        mysql_close($conn);

       
        
        
       } else while($row = mysqli_fetch_array($result)) {
            if($row['checkedin'] == "No"){
         
        
           $conn = mysqli_connect('setapproject.org','csc412','csc412','csc412');
// Check connection
            if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE fboswell3 SET checkedin='Yes' WHERE rfid='$body'";

            if ($conn->query($sql) === TRUE) {
             echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            exit();
            }else{
                
           $conn = mysqli_connect('setapproject.org','csc412','csc412','csc412');
// Check connection
            if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE fboswell3 SET checkedin='No' WHERE rfid='$body'";

            if ($conn->query($sql) === TRUE) {
             echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            exit();
            }
       }
       
       
       
       
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['body']. " years old.";
      
      exit();
   }
?>
