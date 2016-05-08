<?php
include('lang.php');  
include('ManageLang.php');

?>



<!DOCTYPE html>
<html>
   <head>
    <meta name="viewport"
     content="target-densitydpi=device-dpi,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
      <link rel="icon" href="faviconic.ico" />
       <title>Portfolio</title>
	   <link rel='stylesheet' href='css/style.css'>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>  -->
	  <!-- <script type="text/javascript" src="js/jquery.js"></script>-->
       <script type="text/javascript" src="js/mosaic.1.0.1.js"></script>
	   <script type="text/javascript">  
			
			jQuery(function($){
				
				$('.circle').mosaic({
					opacity		:	0.8	
				});
				
				$('.fade').mosaic();
		    
		    });
		    
		</script>
	   <style>
	        
	    
		  
	   </style>
	</head>
	
	<body>
	    <div id="content">
		<a href="works.php?lang=en"><img src="images/en.JPG"/></a>
		<a href="works.php?lang=fr"><img src="images/fr.JPG"/></a>
		<nav>
		
		 <ul >
		 <img src="images/yh.gif"/>

                <li>  <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a></li>
                <li>  <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a></li>
				<li>  <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a></li>
                <li>  <a style="border-style:none;" href="contact.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a></li>
		 </ul>
		</nav>
		
		</div>
		
		
		<div id="websites">
				<div class="mosaic-block fade">
					<a href=""  class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $lang[$_SESSION['lang']]['rkt']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/rkt.jpg"/></div>
		      </div>
			  
			  <div class="mosaic-block fade">
					<a href="" class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $lang[$_SESSION['lang']]['marvel']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/marveldc.jpg"/></div> <br/>
		      </div>
			  
			   <div class="mosaic-block fade">
					<a href=""  class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $lang[$_SESSION['lang']]['renex']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/poele.jpg"/></div>
		      </div>
			  
			  <div class="mosaic-block fade">
					<a href="" class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $lang[$_SESSION['lang']]['cakes']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/roxandcakes.jpg"/></div>
		      </div>
			  
			   <div class="mosaic-block fade">
					<a href="" target="_blank" class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $lang[$_SESSION['lang']]['java']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/java.jpg"/></div>
		      </div>
			  
			   <div class="mosaic-block fade">
					<a href="" class="mosaic-overlay">
						<div class="details">
						    <h4><?php echo $lang[$_SESSION['lang']]['robot']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/robot.png"/></div>
		      </div>
			  
			     <div class="mosaic-block fade">
					<a href="" class="mosaic-overlay">
						<div class="details">
						    <h4><?php echo $lang[$_SESSION['lang']]['youss']; ?></h4>
							<p><?php echo $lang[$_SESSION['lang']]['me']; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop"><img src="images/youss.JPG"/></div>
		      </div>
				
		
		</div>

</div>
		</div>
		
	
	  
	   <video id='background' src='fond.mp4' autoplay='true' muted='true' loop='true'></video>
	 
	     <div class="mobileWorks">
           <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a>
           <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a>
		   <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a>
           <a href="contact.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a>

       </div>
	   
	  
	</body>
	
</html>