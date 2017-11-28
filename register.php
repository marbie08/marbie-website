<!doctype html>  
<html>  
<head>  



<title>Register</title> 

<link rel="stylesheet" href="css/style.css">

</head>  



<body>
  

	


<div class ="form">
<div class="title">Registration</div>

<fieldset class="field_set">


<form action = "" method="POST" >       


<label for="text"> Name: </label>
<input type="text" name="name" placeholder="Name" required>
<label for="text"> Age: </label>
<input type="text" name="age" placeholder="Age" required>
<label for="text"> Address: </label>
<input type="text" name="address" placeholder="Address"required >

<label for="email"> Email Address: </label>
<input type="email" name="eadd" placeholder="Email Address" required>

<label for="text"> Contact: </label>
<input type="text" name="contact" placeholder="Contact" required>
<label for="text"> Username: </label>
<input type="text" name="user" placeholder="Username" required>
<label for="password"> Password: </label>

<input type="password" name="pass" placeholder="Password" required>

<center><input type="submit" name="submit" class="marbie" value="Register"/></center>

<div class="col"><a href='login.php'>Sign in Now!</a></div>



</fieldset>
</div>
</form>

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
echo "";

if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['eadd']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['address'])) {  

	$name=$_POST['name'];
	$age=$_POST['age'];
	$address=$_POST['address'];
   	$eadd=$_POST['eadd'];
    	$contact=$_POST['contact'];  	
    	$user=$_POST['user'];  
    	$pass=$_POST['pass'];  

    mysqli_select_db($conn,$db) or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM login WHERE eadd='".$eadd."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(name,age,address,eadd,contact,username,password) VALUES('$name','$age','$address','$eadd','$contact','$user','$pass')";  
  	
    $result=mysqli_query($conn,$sql);  

        if($result){  
   
	echo '<script language="javascript">';
	echo 'alert("Account Successfully Created!")';
	echo '</script>';
	
	

    } else {  
    
	echo '<script language="javascript">';
	echo 'alert("The Email Address is already exists! Please try again with another.")';
	echo '</script>';
	


    }  
  }
    }	else {   
	echo '<script language="javascript">';
	echo 'alert("All fields are required!")';
	echo '</script>';


	}  
}
?>
              
      

</body>  
</html>