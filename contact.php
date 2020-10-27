<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="mycss/file.css"> 
     <script src="myjquery/jqueryfirst.js" type="text/javascript"></script>
     <script src="myjquery/secondproper.js" type="text/javascript"></script>
     <script src="myjquery/thirdbootstrap.js" type="text/javascript"></script>
    <title>Contact Us</title>
    <style>
	   body {
		   padding:0;
		   margin:0;
	   }
	   form  {
		   padding-bottom:50px;
	   }
	   body {
		   background-image:url("images/carousel1.jpg");
		   background-position:center;
		   background-repeat:no-repeat;
		   background-size:cover;
		   background-attachment:fixed; 
		   overflow:hidden;
	   }
	   .close {
  position: absolute;
  right: 25px;
  top: 5px;
  color: white;
  font-size: 35px;
  font-weight: bold;
}
	   label {
		   color:white;
	   }
		  
	</style>
</head>
<body>
<span onclick="window.location.href='index.php'" class="close">&times;</span>
<div class="container" style="width:400px">
 
  <h1 style="color:white">Feedback Form</h1>
  
   <form action="feedback.php" method="post">
     <div class="form-group">
       <label>UserName *</label>
       <input type="text" class="form-control" placeholder="Enter Name" name="username" required>
       
     </div>
     <div class="form-group">
       <label>Email Address *</label>
       <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
     </div>
     
     <p style="color:white">Message *</p>
     <div class="form-group">
       <textarea rows="5" class="form-control" name="message" placeholder="Enter Your Message Here ...."></textarea>
     </div>
     <input type="submit" class="btn btn-success">
   </form>
</div>  <!-- container div -->


</body>
</html>