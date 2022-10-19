<?php 

    require_once 'koneksi.php';
    $skill = mysqli_query($koneksi, "SELECT * FROM skill");
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

<section id="about">

   <div class="row">
    <div class="col">
    <h3>Skills</h3>
	<p>Beberapa skill yang saya bisa dan juga Beberapa yang telah saya pelajari selama ini</p>
    <ul class="skill-bars">
        <?php foreach($skill as $sk): ?>
            <li>
                <div class="progress percent<?= $sk['progress_bar']; ?>"><span><?= $sk['progress_bar']; ?>%</span></div>
                <strong><?= $sk['nama_skill']; ?></strong>
            </li>

            <?php endforeach ?>
    </ul> <!-- /skill-bars -->		

    </div>
    </div>
    


</section>

<section id="contact">
		
	<div class="row contact-form justify-content-center">

<div class="col-twelve">
<div class="row section-intro">
   <div class="col-twelve">

       <h5>Skill</h5>
     </div>
   </div>
 <!-- form -->
 <form method="post">
	   <fieldset>

	   <div class="form-field">
				 <input name="nama_skill" type="text" id="nama_skill" placeholder="Nama_skill" value="" required>
		</div>                       
	   <div class="form-field">
            <input name="progress_bar" type="text" id="progress_bar" placeholder="Progress Bar contoh: untuk 10% tulis 10" value="" required>
		</div>                      
	  <div class="form-field">
		  <button type="submit" name="btnTambahSkill" class="submitform">Submit</button>
		  <div id="submit-loader">
			 <div class="text-loader">Sending...</div>                             
				  <div class="s-loader">
						   <div class="bounce1"></div>
						   <div class="bounce2"></div>
						   <div class="bounce3"></div>
					 </div>
				 </div>
	   </div>

	   </fieldset>
   </form> <!-- Form End -->

 <!-- contact-warning -->
 <div id="message-warning">            	
 </div>            
 <!-- contact-success -->
   <div id="message-success">
	<i class="fa fa-check"></i>Your message was sent, thank you!<br>
   </div>

</div> <!-- /col-twelve -->

</div> <!-- /contact-form -->

	</section>


    

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