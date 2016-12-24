<?php

$fame=$_POST['fname'];
$lame=$_POST['lname'];


$file = fopen("gbook.txt", "w") or die("Unable to open file!");
$txt = $fame . " " . $lame . "\n";
fwrite($myfile, $txt);
fclose($myfile);

$file = fopen("gbook.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);


  echo "lol"; 

?>