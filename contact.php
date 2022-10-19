<?php 
    require_once 'koneksi.php';
    $contact = mysqli_query($koneksi, "SELECT * FROM contact");
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
	<title>Kards</title>
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
		         <a href="index.php">PORTOFOLIO</a>
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

<!-- contact
   ================================================== -->
   <section id="contact">

<div class="row section-intro">
   <div class="col-twelve">

       <h5>Contact</h5>
       <h1>I'd Love To Hear From You.</h1>

       <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   </div> 
</div> <!-- /section-intro -->

<div class="row contact-info">

    <div class="col-four tab-full">
       <div class="icon">
           <i class="icon-pin"></i>
       </div>
        <?php foreach($contact as $co): ?>
            <h5><?= $co['judul']; ?></h5>
            <p><?= $co['isi']; ?></p>
        <?php endforeach ?>
    </div>

    <div class="col-four tab-full collapse">
       <div class="icon">
           <i class="icon-mail"></i>
       </div>
       <?php foreach($contact as $co): ?>
            <h5><?= $co['judul_2']; ?></h5>
            <p><?= $co['isi_2']; ?></p>
        <?php endforeach ?>
    </div>

    <div class="col-four tab-full">
       <div class="icon">
           <i class="icon-phone"></i>
       </div>
       <?php foreach($contact as $co): ?>
            <h5><?= $co['judul_3']; ?></h5>
            <p><?= $co['isi_3']; ?></p>
        <?php endforeach ?>
    </div>
   
</div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
================================================== -->

<footer>
 <div class="row">

     <div class="col-six tab-full pull-right social">

         <ul class="footer-social">        
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
       </ul> 
          
  </div>
    

<div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   
   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
</div>
</body>
</html>