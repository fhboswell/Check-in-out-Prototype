<html>
<head>
<title>Add a quote</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
$dbhost = 'setapproject.org';
$dbuser = 'csc412';
$dbpass = 'csc412';
$dbname = "csc412";
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $name = $_POST['name'];
   $body = $_POST['body'];


$sql = "INSERT INTO fboswell".
       "(Name,Body) ".
       "VALUES".
       "('$name','$body')";
mysql_select_db('csc412');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
mysql_close($conn);

$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');
// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM fboswell");
echo "Name           Quote";
echo "--------------------";
while($row = mysqli_fetch_array($result)) {
  echo $row['Name'] . " " . $row['Body'];
  echo "<br>";
}
echo "hello";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="600" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="250">Name</td>
<td>
<input name="name" type="text" id="name">
</td>
</tr>
<tr>
<td width="250">Quote Author</td>
<td>
<input name="body" type="text" id="body">
</td>
</tr>
<tr>
<td width="250"> </td>
<td>
<input name="add" type="submit" id="add" value="Add Quote">
</td>
</tr>


</table>
</form>
<?php
}
?>
</body>
</html>