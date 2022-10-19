<?php 
  require_once 'koneksi.php';
	$about = mysqli_query($koneksi, "SELECT * FROM about");
  $header_about = mysqli_query($koneksi, "SELECT * FROM header_about");
  $ha = mysqli_fetch_assoc($header_about);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTOFOLIO</title>

    <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Portofolio</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="images/profil.png">
	


</head>
<body>

<header>   	
   	<div class="row">
   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>
	   		<div class="logo">
		         <a href="index.php">About</a>
		    </div>		      
		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a href="index.php" title="">Home</a></li>
						<li><a href="about.php" title="">About</a></li>
						<li><a href="skill.php" title="">skill</a></li>
						<li><a href="galeri.php" title="">Gallery</a></li>
						<li><a href="education.php" title="">Education</a></li>					
						<li><a href="contact.php" title="">Contact</a></li>				
					</ul>
				</nav>    		
   		</div>
   	</div>  		
   </header> 
   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1><?= $ha['judul']; ?></h1>

   			<div class="intro-info">

   				<img src="images/<?= $ha['image']; ?>" alt="Profile Picture">

   				<p class="lead"><?= $ha['deskripsi']; ?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="six tab-full">

   			<ul class="info-list">
					<?php foreach ($about as $ab): ?>
						<li>
							<strong><?= $ab['judul']; ?></strong>
							<span><?= $ab['deskripsi']; ?></span>
						</li>
					<?php endforeach ?>
	   				
   				

   			</ul> <!-- /info-list -->

   		</div>


   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke">Hire Me</a>
   			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>
	
   </section> <!-- /process-->  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
    
</body>
</html>