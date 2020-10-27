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
  
     <title>Home</title>
     <style type="text/css">
	 body{
		 padding:0;
		 margin:0;
	 }
	 .colorchange  {
		 color:black;
		 animation:myanimation 5s infinite;
	 }
	 @keyframes myanimation {
		 0% {color:black;}
		 25% {color:blue;}
		 50% {color:#3F0;}
		 75% {color:red;}
	 }
	 .carousel-inner img {
		 width:100%;
		 height:70vh;
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
	 .about {
		 border-radius:50px;
		 font-size:16px;
		 white-space:nowrap;
		 padding:7px 25px 8px 25px;
		
	 }
	 li {
		 padding:5px;
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
      <li class="nav-item active">
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
<!-- starting of carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
  $sql1 = "SELECT * FROM carousel"; 
  $result1 = mysqli_query($conn,$sql1);
  $i = 0;
  while($row1 = mysqli_fetch_assoc($result1)) {
	 
	  if($i ==0) {
		  $actives = 'active';
	  }else {
		  $actives = '';
	  }
	   
  ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" 
    class="<?php echo $actives; ?>"></li>
   <?php	   
 $i++; 
  } ?>
  </ol>
  <div class="carousel-inner" style="margin-top:71px">
  <?php 
   $i = 0;
  foreach($result1 as $row1) {
	  if($i ==0) {
		  $actives = 'active';
	  } else  {
		  $actives = '';
	  }
   ?>
    <div class="carousel-item <?php echo $actives; ?>">
      <img class="d-block w-100" src="admin/images/<?php echo $row1['IMAGE'];?>">
    </div>
  <?php
		
   $i++;
   } 
   ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" 
  data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" 
  data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ending of carousel -->


<!-- starting of after carousel content -->

<div class="container">
<br><br>

<div class="section-title"> <!-- staring of about section -->
<h2>About</h2>       <!-- For line -->
<p class="colorchange">About us</p>
</div>   <!-- section title div -->
<div class="container-fluid">
<div class="row">
   <div class="col-md-6">
      <div class="img-fluid">
      <?php 
       $sql7 ="SELECT * FROM aboutpic";
	   $result7 = mysqli_query($conn,$sql7) or die("about pic query not running");
	   if(mysqli_num_rows($result7)==1)  {
		   while($row7 = mysqli_fetch_assoc($result7)) {
	 ?>
        <img src="admin/images/<?php echo $row7['IMAGE'];?>" 
        style="width:100%" class="img-thumbnail">
        <?php } }?>
      </div>
   </div>
   <div class="col-md-6">
     <h2 class="colorchange"><i>A Digital Future</i></h2>
     <p>We are here to develop future of Web-Development from now. 
     This Website will provide you:</p>
     <ol>
      <?php 
	    $sql2 = "SELECT * FROM about";
		$result2 = mysqli_query($conn,$sql2) or die("About query not running");
		if(mysqli_num_rows($result2)>0) {
			while($row2 = mysqli_fetch_assoc($result2))  {
	  ?>
       <li><?php echo $row2['FEATURE'];?></li>
       <?php } }?>
     </ol>
     <button class="btn btn-primary about" onClick="window.location.href='#'">Read more
     </button>
   </div>
</div>   <!-- row div -->
</div>  <!-- container fluid -->
<br>
<div class="section-title"> <!-- staring of about section -->
<h2>SERVICES</h2>       <!-- For line -->
<p class="colorchange">Tools</p>
</div>   <!-- section title div -->
<div class="row">
<?php 
$conn = mysqli_connect('localhost','root','','newwebsite') or die("Not Connected With Server");
	 $sql = "SELECT * FROM card";
	 $result = mysqli_query($conn,$sql) or die("query not running");
	 if(mysqli_num_rows($result)>0)  {
		 while($row = mysqli_fetch_assoc($result)) {
?>
<div class="col-sm-4" style="height:auto">	
<div class="card mx-auto">
  <img class="card-img-top" style="height:25vh" src="admin/images/<?php echo $row['IMAGE'];?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['TITLE'];?></h4>
    <p class="card-text text-muted text-truncate"><?php echo $row['DESCRIPTION'];?></p>
    <a class="btn btn-primary" href="card-details.php?ID=<?php echo $row['ID']; ?>">
    Download</a>
  </div> <!-- card body div -->
</div>  <!-- card div -->
</div>    <!-- col div -->
<?php } }?>
</div>  <!-- row div -->

</div>       <!-- container div -->
<!-- user and download section start -->
<div class="container-fluid bg-light" style="padding-top:10px; padding-bottom:5px">
 <div class="row">
   <div class="col-md-6 col-6 text-center">
    <span>
    <?php 
	 $sql3 = "SELECT * FROM userdata";
	 $result3 = mysqli_query($conn,$sql3) or die("Count users query not running");
	 $row3 = mysqli_num_rows($result3);	 
	 echo "<h1 class='text-primary'><strong>$row3</strong></h1>";
	?>
    </span>
    <p><strong>Users</strong></p>
   </div>
   
   <div class="col-md-6 col-6 text-center">
    <span>
      <h1 class="text-primary"><strong>5</strong></h1>
      <p><b>Download's</b></p>
    </span>
   </div>
 </div><!-- row div -->

</div>   <!-- container fluid div -->
<!-- user and download section end -->
 
<div class="container">
<!-- why choose A digital future start -->
<br>
<div class="row">
  <div class="col-md-4 text-left bg-light" style="padding:30px 30px">
    <h1 class="text-primary">Why Choose Digital Future ?</h1>
    <?php
       $sql4 = "SELECT * FROM whychoose";
	   $result4 = mysqli_query($conn,$sql4) or die("Why choose query not running");
	   while($row4 = mysqli_fetch_assoc($result4))  {
	  ?>
    <p>
        <?php echo $row4['TEXT']; ?>
    </p>
    <?php } ?>
    <button class="btn btn-primary about" onClick="window.location.href='#'">Read More</button>
  </div>
  <div class="col-md-8">
 
  <h2 class="text-primary text-center"><i>Steps For Development</i></h2>
 
    <div class="row">
    <?php
      $sql5 = "SELECT * FROM steps";
	  $result5 = mysqli_query($conn,$sql5) or die("Steps query not running");
	  if(mysqli_num_rows($result5)>0)  {
		  while($row5 = mysqli_fetch_assoc($result5)) {
	?>
     <div class="col-md-6">
      <div class="card mx-auto" style="margin-top:20px">
 
          <img class="card-img-top" 
         style="height:25vh" 
         src="admin/images/<?php echo $row5['IMAGE'];?>" alt="Card image">
    
       <div class="card-body">
         <h4 class="card-titles text-primary text-center"><?php echo $row5['TITLE']; ?></h4>
         <p class="card-text"><i>
         <?php echo $row5['DESCRIPTION']; ?>
         </i></p>
       </div> <!-- card body div -->
     </div>  <!-- card div -->
    </div>  <!-- col-md -6 div -->
    
    <?php } }?>
    
      
     
    </div><!-- row div -->
  </div> <!-- col-md-8 div -->
</div><!-- row div -->

<!-- why choose A digital future end -->
</div> <!-- container div -->
<br>
<!-- courses part start -->
<div class="container">
<div class="section-title"> <!-- staring of about section -->
<h2>COURSES</h2>       <!-- For line -->
<p class="colorchange">In Demand</p>
</div>   <!-- section title div -->
<div class="row">
   <?php
      $sql6 = "SELECT * FROM courses";
	  $result6 = mysqli_query($conn,$sql6) or die("courses query not running");
	  if(mysqli_num_rows($result6)>0)  {
		  while($row6 = mysqli_fetch_assoc($result6)) {
	?>
  <div class="col-md-3">
      <div class="card mx-auto">
       
         <img class="card-img-top" 
         style="height:25vh" 
         src="admin/images/<?php echo $row6['IMAGE'];?>" alt="Card image">
    
       <div class="card-body">
         <h4 class="card-title text-primary"><?php echo $row6['TITLE'];?></h4>
         <p class="card-text text-muted"><i>
           <?php echo substr($row6['DESCRIPTION'],0,150) . "...";?>
         </i></p>
         <button class="btn btn-primary" onClick="window.location.href='#'">Read more
     </button>
       </div> <!-- card body div -->
     </div>  <!-- card div -->
  </div>  <!-- col-md-3 div -->
  <?php } }?>
  
  
  </div>  <!-- col-md-3 div -->
</div>  <!-- row div -->
  

</div> <!-- container div -->
<!-- courses part end -->

<br>

<!-- footer section start -->
<?php
include('footer.php');
?>
<!-- footer section end -->

  </body>
</html>
