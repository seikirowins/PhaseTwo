<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->get_title(); ?></title>
	 <meta charset="utf-8">
   <link rel="shortcut icon" type="image/png" href="images/logo/cldh.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="CLDH-EI Online Registration system">
  <meta name="keywords" content="CLDH-EI Online Registration system, Central Luzon Doctor's Hospital-Educational Institution, K-12, Student Portal, Philippines">

<!-- date picker son of a bitch!! -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jslib/datetimepicker-master/build/jquery.datetimepicker.min.css">
    <script src="jslib/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>


<!-- end date picker shit -->

<!-- bootstrap shit -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/cldh-theme.css">
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="js/cldh.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40">
 
 
<nav class="navbar  navbar-expand-lg">
   
        <a href="#" class="navbar-brand brand"> <img src="images/logo/cldh.png" height="40" width="50"> CLDH-EI</a>
    <button class="navbar-toggler navbar-toggler-right cldh" type="button" id="open" data-toggle="collapse" data-target="#nav">
        ☰
    </button>
  
    <div class="navbar-collapse collapse" id="nav">
    
     <ul class="navbar-nav"> 
       <?php
       $this->createNavigation($navigation);
     
       ?>
     </ul>
     <ul class="navbar-nav ml-auto">
          <?php $this->createNavigation($portal,"modal");?>
     </ul>
    
   </div>
</nav>


<?php
  $this->Modal(array(
    "id"=>"portal",
    "title"=>"<img src='images/logo/cldh.png' height='40' width='50'> Welcome to the CLDH-EI",
   
    "body"=>"pages/pages_includes/form.php"
  ));
?>


