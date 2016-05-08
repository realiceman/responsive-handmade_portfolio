<?php
include('lang.php');  
include('ManageLang.php');

$name = $_GET['name'];

?>



<!DOCTYPE html>
<html>
   <head>
       <link rel="icon" href="faviconic.ico" />
       <title>Portfolio</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
	   <link rel='stylesheet' href='css/style.css'>
	   <link rel='stylesheet' href='css/contact.css'>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		 <script type="text/javascript" src="js/contactMessage.js"></script>
	   <!--<script type="text/javascript" src="js/jquery.js"></script>-->
	   
	   <style>
	       .container{
		      width:30%;
			  height:15%;
			  left:15%;
			  background-color:white;
			  
		   }
		   p{    
		   color: #3276ff;
			font-family: fantasy;
			font-size: 20px;
			}
			#signature{text-align:center;margin-top:5px;}
	   </style>
	
	</head>
	
	<body>
	    <div id="content">
		<a href="contact.php?lang=en"><img src="images/en.JPG"/></a>
		<a href="contact.php?lang=fr"><img src="images/fr.JPG"/></a>
		<nav>
		
		 <ul >
		 <img src="images/yh.gif"/>

                <li>  <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a></li>
                <li>  <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a></li>
				<li>  <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a></li>
                <li>  <a style="border-style:none;" href="realisations.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a></li>
		 </ul>
		</nav>
		
		</div>
		
	
		<div class="container">
	           <p><?php echo $lang[$_SESSION['lang']]['thanksMr']; ?><?php echo $name; ?> <?php echo $lang[$_SESSION['lang']]['4urMessage']; ?><br/><img id="signature" src="images/yh_logo.jpg"/></p>
			   
        </div>



		
		
	
	  
	   <video id='background' src='fond.mp4' autoplay='true' muted='true' loop='true'></video>
	 
	     <div class="mobileWorks">
           <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a>
           <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a>
		   <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a>
           <a href="realisations.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a>

       </div>
	   
	   
	    
	   <script type="text/javascript">  
			
			jQuery(function($){
			   var windowWidth = $(window).width();
	             if(windowWidth > 822){
	                   $(".container").delay(500).animate({ "top" : "200px" }, 2000);

                  }
				  
				 
             });
			 
			
			
			
		    
		</script>
	  
	</body>
	
</html>