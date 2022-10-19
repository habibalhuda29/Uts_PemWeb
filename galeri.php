<?php 
    require_once 'koneksi.php';
    $gallery = mysqli_query($koneksi, "SELECT * FROM gallery");
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

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
	<link rel="icon" href="images/profil.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
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
						<li><a href="skill.php" title="">Skill</a></li>
						<li><a href="galeri.php" title="">Gallery</a></li>
						<li><a href="education.php" title="">Education</a></li>					
						<li><a href="contact.php" title="">Contact</a></li>		
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->
   <section id="skill">
        <div class="container">
            <div class="row text-center mb-3 section-intro" style="color: #fff;"> 
                <div class="col-twelve">
                    <h3></h3>
                </div>
            </div>
            <div class="row mt-5 section-intro">
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <?php foreach($gallery as $gl): ?>
                        <li>
                            <img src="images/<?= $gl['image']; ?>" class="card-img-top" alt="Model_1">
                            <strong><?= $gl['deskripsi']; ?></strong>
                        </li>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
      </section>

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