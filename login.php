<!doctype html>  
<html>  
<head>  
<title>Login</title>  


<link rel="stylesheet" href="css/style1.css">

 

 
</head>



<body>
  

<section class="login">

<div class="title">Sign In</div>


<fieldset class="field_set">
<form action="" method="POST">  



<label for="text"> Username: </label>
<input type="text" placeholder="Enter Username" name="user" required>

<label for="password"> Password: </label>
<input type="password" name="pass" placeholder="Enter Password" required> </div>

<div class="btn">
        	<div class="col"><a href="register.php" title="Sign up">Register</a></div>
            <div class="col"><a href="#" title="Reset Password">Forgot Password?</a></div>
        </div>
	
	<center>	
<input type="submit" value="Login" name="submit" class="marbie"/></div></center>
</fieldset>
</div>

</form>  





</section>








<?php  

$servername = "localhost";
$username = "root";
$password = "";
$db = "user-registration";


// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  



    mysqli_select_db($conn,$db) or die("cannot select DB");
  
    $query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $user=$row['username'];  
    $pass=$row['password'];  
    }  
  
    if($user == $user && $pass == $pass)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
      
	
	echo '<script language="javascript">';
	echo 'alert("Invalid username or password!")';
	echo '</script>';
	
    }
  }
 else {  
	

	echo '<script language="javascript">';	
	echo 'alert("All fields are required!")';
	echo '</script>'; 

	
}  
}  

?>  




</body>  
</html>