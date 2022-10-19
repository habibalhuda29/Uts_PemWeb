<?php 
    require_once 'koneksi.php';
    $edukasi = mysqli_query($koneksi, "SELECT * FROM edukasi");
    $organisasi = mysqli_query($koneksi, "SELECT * FROM organisasi");
    $ed = mysqli_fetch_assoc($organisasi);
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
		         <a href="index.php">KARDS</a>
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

 <!-- resume Section
   ================================================== -->
   <section id="resume" class="grey-section">

<div class="row section-intro">
   <div class="col-twelve">

       <h5>Resume</h5>
       <h1>More of my credentials.</h1>
   </div>   		
</div> <!-- /section-intro--> 

<div class="row resume-timeline">

   <div class="col-twelve resume-header">

       <h2>Education</h2>

   </div> <!-- /resume-header -->

<div class="col-twelve">

    <div class="timeline-wrap">

        <div class="timeline-block">

               <div class="timeline-ico">
                   <i class="fa fa-graduation-cap"></i>
               </div>

               <div class="timeline-header">
                    <?php foreach ($edukasi as $ed): ?>
                        <h3><?= $ed['judul']; ?></h3>
                        <p><?= $ed['tahun']; ?></p>
                    <?php endforeach ?>
               </div>

               <div class="timeline-content">
                    <?php foreach ($edukasi as $ed): ?> 
                        <h4><?= $ed['judul_2']; ?></h4>
                        <p><?= $ed['deskripsi']; ?></p>
                    <?php endforeach ?>
               </div>

               <div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

                    <div class="timeline-header">
	   					<h3>SMP 4 Tangsel</h3>
                        <p>2014-2017</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Junior High School</h4>
	   					<p>Saya Sudah bersekolah di SMP 4 Tanggerang Selatan selama 3 tahun saya sudah belajar dengan baik dan belajar dengan sungguh sungguh</p>
	   				</div>
                    
	   			</div> <!-- /timeline-block -->

                <div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

                    <div class="timeline-header">
	   					<h3>SMK AL-AMANAH</h3>
                        <p>2017-2020</p>

	   				</div>

	   				<div class="timeline-content">
	   					<h4>Vocational High School.</h4>
                        <p>Saya sudah bersekolah di SMK Al-AMANAH yang dimana itu adalah sekolah kejuruan yang dimana saya memilik jurusan informatika di sekolah Al-AMANAH</p>
	   				</div>
                    
	   			</div> <!-- /timeline-block -->
                <div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

                    <div class="timeline-header">
	   					<h3>Universitas Pembangunan Jaya</h3>
                        <p>2020-Now</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>PRESENT</h4>
	   					<p>Saya sudah masuk ke jenjang lebih tinggi yaitu di UNIVERSITAS PEMBANGUNAN JAYA yang dimana saya mengambil jurusan Informatika </p>
	   				</div>

        </div> <!-- /timeline-block -->

           

       </div> <!-- /timeline-wrap -->  
       
       <div class="col-twelve resume-header">

   			<h2>Organization</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

                    <div class="timeline-header">
	   					<h3>2020 - 2021</h3>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Angota Devisi Perlengkapan PRIMA Universitas Pembangunan Jaya</h4>
                        <p>Saya mengikuti acara Prima dimana itu adalah acara penerimaan mahasiswa baru yang di selenggarakan oleh kampus Universitas Pembangunan jaya</p>
	   				</div>
                    
	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>2020 - Now</h3>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Angota Devisi Perlengkapan PRIMA Universitas Pembangunan Jaya</h4>
	   					<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>2020 - Now</h3>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Angota Devisi PDD Himpunan Mahasiswa Universitas Pembangunan Jaya</h4>
                        <p>saya mengikuti ke anggotaan yang di adakan oleh informatika sendiri yaitu himpunan yang ada di informatika</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->

   </div> <!-- /col-twelve -->
   
</div> <!-- /resume-timeline -->

</section> <!-- /features -->
    

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