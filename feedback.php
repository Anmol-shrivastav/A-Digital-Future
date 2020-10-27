<?php 
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
$conn = mysqli_connect('localhost','root','','newwebsite') or die("Not Connected With Server");
$sql = "INSERT INTO feedback(USERNAME,EMAIL,MESSAGE) 	
        VALUES('{$username}','{$email}','{$message}')";
mysqli_query($conn,$sql) or die("Query Not Running");
echo '<script type="text/javascript">alert("Feedback Submitted");
      window.location="index.php";
      </script>';

?>