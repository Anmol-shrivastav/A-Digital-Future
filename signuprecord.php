<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$role = "Normal User";


if($password == $repassword)  {
	$conn = mysqli_connect('localhost','root','','newwebsite') or die("Not Connected With Server");
	//checking for duplicate data
	$sql = "SELECT * FROM userdata WHERE NAME='{$username}'&&EMAIL='{$email}'&&PASSWORD ='$password' ";
	$result = mysqli_query($conn,$sql) or die("First query is not running");
	if(mysqli_num_rows($result)>0)
	 {
		echo '<script type="text/javascript">
               alert("Already have an account")
			   window.location="http://localhost/new website/signup.php"
              </script>';
	}  else {
	$sql1 = "INSERT INTO userdata(NAME,EMAIL,PASSWORD,ROLE) 
	VALUES('{$username}','{$email}','{$password}','{$role}')";
	$result1 = mysqli_query($conn,$sql1) or die("Query Not Running");
	
	echo '<script type="text/javascript"> alert("Successful signup")
	 window.location="http://localhost/new website/index.php"
	 </script>';
	}
}
else {
	echo "Password Does Not Matched";
}

?>