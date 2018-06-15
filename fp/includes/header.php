<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="ca">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body id="top">
<!-- START WRAPPER -->
<div class="wrapper">
<header>
    
    <ul id="social">
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
        <li><a href=""><i class="fa fa-phone"></i></a></li>
    </ul>
   
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Didmos Cleaning Services</a></h1>
    
  <nav>
    <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
      <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="template.php">home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
    -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    
    </ul>
      
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>