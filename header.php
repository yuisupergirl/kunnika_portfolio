<?php 
// start
session_start ();

require_once('lng.php');

?><!doctype html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- we telling computer, we want the browser that have the new version  -->
	<meta charset="utf-8"> <!--  meat data to client software fx. browser, search bot  -->
	<title>Kunnika Bryrup</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- the total space of screen, total viewport width = mobile screen width, no zoom-->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" type="text/css" href="css/wysiwyg-color.css">
	<link rel="stylesheet" href="css/bootstrap.css">
		
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<script src="js/wysihtml5-0.3.0.js"></script>
	<script src="js/jquery-2.1.1.js"></script>
	
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-wysihtml5.js"></script>	
	<script src="js/myjava.js"></script>
	
	<link rel="shortcut icon" href="images/favicon.ico?v=1">
	<link rel="icon" type="image/jpg" href="images/favicon.ico"/>
	
</head>
<body>

	
<div class="container">

<header class="header">
  <!-- Begin Header -->
  <!-- Navigation cllapsed ================================================== -->
  <div style="text-align: right; padding: 10px 40px 0 0;">

  <a class="lang" href="?lang=da"><img src="images/flag-denmark_bw.png"/> <?php echo t("Danish");?></a> 
 <a class="lang" href="?lang=en"><img src="images/flag-united-kingdom_bw.png"/> <?php echo t("English");?></a></div>

  <div class="navbar-toggle collapsed"><a href="#"><i class="fa fa-bars fa-2x" style="color: #efefef;"></i></a><!-- collapse menu bar for mobile -->
    <ul class="dropdown" style="padding-top: 20px;padding-bottom: 20px;">
        <li class="dropdown"><a href="index.php"><?php echo t("About me");?><i class="fa fa-home" style="padding-left: 20px;"></i></a></li>
        <li class="dropdown"><a href="projects.php">Projekt<i class="fa fa-pencil-square-o" style="padding-left: 20px;"></i></a></li>       
        <li class="dropdown"><a href="contact.php">Kontakt<i class="fa fa-phone-square" style="padding-left: 20px;"></i></a></li> 
     <!-- <li class="dropdown"><a href="?lang=da"><?php echo t("Danish");?><img src="images/flag-denmark_bw.png"  style="padding-left: 20px;"/></a></li> 
        <li class="dropdown"><a href="?lang=en">English<img src="images/flag-united-kingdom_bw.png"  style="padding-left: 20px;"/></a></li> -->

		</ul>

  </div>

  
  <!-- Logo
        ================================================== 
  <div class="logo"><a href="index.php"><img style ="padding: 20px 0 20px 0;" src="images/kunnika1.png"/><h4 style="color: #8E44AD;">Digital concept developer</h4></a>
</div> -->
   
  <!-- Search Box ==================================================
		<div class "search_container" style="position: relative;height: 30px;">
    <div class="search">
      <form action="forum.php" method="get" class="sfm">
     <input id="search" name="q" type="text" value="<?php echo (isset($_GET['q']) ? $_GET['q'] : '');?>" placeholder="Skiv her..." id="sf"/> this form send data via GET to the forum page and the search box name is 'q' we republish the value with the get value
	 
        <button class="fa fa-search" onClick="this.submit();" id="sb"></button>
      </form>
    </div>
  </div>-->
  
	 <!-- Main Navigation
        ================================================== -->

  <nav class="navigation">
    <div class="navbar hidden-phone">
      <ul class="nav" style="padding-top: 5px; float: right;">
        <li class="dropdown"><a href="index.php"><?php echo t("About me");?></a></li>
        <li class="dropdown"><a href="projects.php"><?php echo t("Projects");?></a></li>
        <li class="dropdown"><a href="contact.php"><?php echo t("Contact");?></a></li>
        </ul>
    </div>
    
  
   
</nav>
   
  


</header>
<!-- End Header -->