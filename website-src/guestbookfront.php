<!DOCTYPE html>
<html>
    

    <link rel="stylesheet" href="style-code.css">
    <style>
        html { 
  background: url(bgimages/home.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
    
  
<body>

<ul class="topnav" id="myTopnav">
  <li><a href="notindex.html">Home</a></li>
  <li><a class="active" href="#home">Guest Book</a></li>
  
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="http://www.cnn.com">About</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  The way you interact with this web page is being recorded in order to analyze and improve.
</div>
    
    <div style="padding-left:16px">
    
    
    
    
   
    
    
   
    
    
</head>

<style type="text/css">
#wrap {
   
   margin:0 auto;
}
#left_col {
   float:left;
   width:400px;
}
#right_col {
   float:left;
   width:300px;
}
</style>
<body>
<div id="wrap">
<div id="left_col">
<div id="mainform">
<div id="form">

<div>
     <h2><span>Guest Book Enter Your Name<span class='spacer'></span>></h2>
    <h2><span>First Name :<span class='spacer'></span><br /><span class='spacer'></span><input id="fname" type="text"></span></h2>
    <h2><span>Last Name :<span class='spacer'></span><br /><span class='spacer'></span><input id="lname" type="text"></span></h2>
    <h2><span><input id="submit" type="button" value="Submit"></span></h2>
</div>
</div>
    </div>
</div>
    <div id="right_col">
    <div id="name">
        <h2><span>Current List of Guests<span class='spacer'></span>></h2>
    <h2><span>First Name :<span class='spacer'></span><br /></h2>
    
</div>
</div>
</div>
</body>
    
    
    
 
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    
    
    
    

    
    
    
    $(document).ready(function(){  
        var dataString = 'string=';
        $.ajax({
         type: "GET",
            url: "guestbookback.php",
           
            success: function(result){
           alert(result);
         $("div.name").html(result.name);
       
        }
        });
        
        
        
        setTimeout(function () {
       $("div.alert").fadeOut("slow");
         }, 2000);
        $("#submit").click(function(){
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        
        var data = 'fname='+ fname + '&lname='+ lname;
        if(fname==''||lname=='')
        {
            alert("Empty fild");
        }
        else
        {
	//AJAX code to submit form.
	$.ajax({
			type: "POST",
			url: "guestbookback.php",
			data: data,
			success: function(result){
								alert(result);
									}
	});
        }
        return false;
    });
});

    
    

    
    





function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


</script>

</body>

</html>


