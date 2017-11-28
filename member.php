<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/page.css" type="text/css">
</head>



<div class="padding">
<font color = "white"><font color ="black"><b>Welcome,</font><font color = "green"> <b><?=$_SESSION['sess_user'];?>!! </font></b>
<a href="logout.php"><font color = "blue"><b>Logout</b></font></a></font></div>
</div>

	
<body>

	<div id="header">
	
	<div class="header">

<ul>
	
<li class="selected">
<a href="member.php">home</a>
</li>
		
<li>
<a href="#">about</a>
</li>
				
<li>
<a href="#">blog</a>
</li>
	
<li>
<a href="#">shows</a>
</li>
	
</ul>
					
</div>

<div class="body">
					
This is for scratch only
	
</div>
		

<div class="footer">
			

	
</div>
	</div>
	

<div id="body">
		
<div class="content">
			

<iframe width="515" height="370" src="https://www.youtube.com/embed/-25Om_MnEK4" frameborder="0" allowfullscreen></iframe>
</div>
	
	
<div class="sidebar">
			
<div>
<h3>Lyrics</h3>
				
<ul>
					
<li>
<a href="https://genius.com/Wester-where-hearts-go-to-die-lyrics">Wester&nbsp;&nbsp;-&nbsp;&nbsp;<b>Where hearts go to die.</b></a>
</li>
					
<li>
<a href="https://www.azlyrics.com/lyrics/getupkids/holiday.html">Typecast&nbsp;&nbsp;-&nbsp;&nbsp;<b>Holiday</b></a>
</li>
					
<li>
<a href="http://www.metrolyrics.com/frailty-lyrics-urban-dub.html">Urbandub&nbsp;&nbsp;-&nbsp;&nbsp;<b>Frailty</b></a>
</li>
		
<li>
<a href="http://rakistalyrics.blogspot.com/2015/04/maryzark-andromeda-lyrics.html">Maryzark&nbsp;&nbsp;-&nbsp;&nbsp;<b>Andromeda</b></a>
</li>
</ul>
			
</div>
			
			
<div class="connect">
<h3>social</h3>

<a href="#" id="googleplus">googleplus</a>

<a href="#" id="facebook">facebook</a>
	
</div>
		
</div>
	
</div>
	

<div id="footer">
		
<p>
&copy;Copyright 2023. <a href="home.php">Company name</a> all rights reserved
</p>
	</div>


</body>

</html>


<?php  
}
?>