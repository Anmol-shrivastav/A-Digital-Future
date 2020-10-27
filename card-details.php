<?php
include('admin/config.php');
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
     <link rel="icon" href="images/logo.jpg">
     <?php 
	 $id = $_GET['ID'];
	 $sql = "SELECT * FROM card WHERE ID = {$id}";
	 $result = mysqli_query($conn,$sql) or die("query not running");
	 $row = mysqli_fetch_assoc($result) 
     ?>
     <title><?php echo $row['TITLE'];?></title>
     
    <style type="text/css">
	    body{
		 padding:0;
		 margin:0;
		}
     .colorchange  {
		 color:black;
		 animation:myanimation 10s infinite;
	 }
	 @keyframes myanimation {
		 0% {color:black;}
		 25% {color:blue;}
		 50% {color:#3F0;}
		 75% {color:red;}
	 }
	 .section-title {
         padding-bottom: 40px;
     }

     .section-title h2 {
         font-size: 14px;
         font-weight: 500;
         padding: 0;
         line-height: 1px;
         margin: 0 0 5px 0;
         letter-spacing: 2px;
         text-transform: uppercase;
         color: #aaaaaa;
         font-family: "Poppins", sans-serif;
     }

     .section-title h2::after {
         content: "";
         width: 120px;
         height: 1px;
         display: inline-block;
		 background:#06F;
         margin: 4px 10px;
     }

     .section-title p {
         margin: 0;
         margin: 0;
         font-size: 36px;
         font-weight: 700;
         font-family: "Poppins", sans-serif;
         color: #37423b;
     }
	 .description {
		 padding:5px 10px 5px 10px;
		 margin-top:-46px;
	 }
	</style>
  </head>
  <body>
  
  <!-- starting of navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <img class="navbar-brand" src="images/logo.jpg" alt="logo" style="width:7vh; height:7svh">
  <h4 class="navbar-brand" style="margin-top:6px">Digital Future</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
      <li class="nav-item dropdown">
      <?php
	    if(isset($_SESSION['NAME']))  {
	 
	  ?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php 
		 echo '<img src="images/loginlogo.jpeg" style=" width:5vh; height=5vh "/>';
		 $mgs = '<strong>Welcome</strong>'; 
		 echo $mgs." ".$_SESSION['NAME']; 
		 ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php"><?php echo 'Logout';?></a>
          
        </div>
        <?php } else {?>
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/loginlogo.jpeg" style=" width:5vh; height=5vh "/>
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.php">Sign-up</a>
          <a class="dropdown-item" href="login.php">Login</a>
        </div>
        <?php }?>
      </li>
    </ul>
  </div>
</nav>
<!--ending of navbar -->

<!-- starting of picture style="" -->
<div class="container-fluid">
<div class="row">
 <div class="col-md-6">
  <img src="admin/images/<?php echo $row['IMAGE']; ?>" 
  style="margin-top:71px; width:100%">
<!-- ending of picture -->
 </div> <!-- col-md-6 div -->
 
 <div class="col-md-6" style="margin-top:75px">
   <div class="section-title"> <!-- staring of about section -->
    <h2 class="colorchange" style="background-color:white">
       <?php echo $row['TITLE'];?>
    </h2><!-- For line -->
    <p class="text-primary">What Is <?php echo $row['TITLE'];?></p>
   </div>   <!-- section title div -->
   <p class="description"><i><?php echo $row['DESCRIPTION'];?></i></p>
 </div><!-- col-md-6 div -->

</div> <!-- row div -->
</div> <!-- container fluid div -->
<br>

<div class="container">
<!-- download section start -->
<div class="section-title"> <!-- staring of about section -->
<h2 class="colorchange" style="background-color:white">Download Section</h2>       <!-- For line -->
<p class="text-primary">Templates</p>
</div>   <!-- section title div -->

  <div class="row" style="margin-top:-25px;">
   <?php 
     $tablename = $row['TITLE'];
     $sql1 = "SELECT * FROM $tablename";
	 $result1 = mysqli_query($conn,$sql1) or die("Templates query not running");
	 if(mysqli_num_rows($result1)>0) {
		 while($row1 = mysqli_fetch_assoc($result1)) {
   ?>
    <div class="col-sm-4" style="height:auto">	
    <div class="card mx-auto">
    <img class="card-img-top" style="height:25vh" 
                                         src="admin/images/<?php echo $row1['IMAGE']; ?>">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row1['TITLE']?></h4>
   
    <a class="btn btn-primary" href="admin/templates/<?php echo $row1['FILENAME']; ?>">
    Download</a>
  </div> <!-- card body div -->
</div>  <!-- card div -->
</div>    <!-- col div -->
<?php } }?>
</div>  <!-- row div -->

</div><!-- container div -->


<!-- download section end -->


<br>
<!-- footer section start -->
<?php 
include('footer.php');
?>
<!-- footer section ends -->
  
 
  
  </body>
 </html>
    