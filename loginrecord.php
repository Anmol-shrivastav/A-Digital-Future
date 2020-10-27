<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root','','newwebsite') or die("Not Connected");
$sql = "SELECT * FROM userdata WHERE EMAIL ='$email'&&PASSWORD ='$password' && ROLE='Normal User' ";
$result = mysqli_query($conn,$sql) or die("Query not running");
if(mysqli_num_rows($result) ==1) {
	    while($row = mysqli_fetch_assoc($result))  {
		session_start();
	    $_SESSION['NAME'] = $row['NAME'];
   	    header('location: index.php');
		}
	
}
else  {
	echo '<script type="text/javascript">alert("Incorrect Email or Password")
	window.location="login.php"</script>';
}
?>