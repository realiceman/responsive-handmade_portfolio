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

	   <style>
	   
	   </style>
	</head>
	
	<body>
	    <div id="content">
		 <div id="contentInside">
			<a href="index.php?lang=en"><img src="images/en.JPG"/></a>
			<a href="index.php?lang=fr"><img src="images/fr.JPG"/></a>
		  </div>
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
		
		   <div id="quotes">  
				  <a id="name">Youssef Harkati</a>
				  
				  <p id="prog"><b><?php echo $lang[$_SESSION['lang']]['program']; ?></b></p>
				  <p id="web">{ Web &amp; Java }</p>
				  <p id="text"><?php echo $lang[$_SESSION['lang']]['intro']; ?><p>
				
				   <div class="bottom-btn">

						<a href="works.php">

							
							<span>

								<?php echo $lang[$_SESSION['lang']]['works']; ?>&#10152; 

							</span>
						</a>

				  </div>
		</div>
		
		
	   <video id='background' src='fond.mp4' autoplay='autoplay'  muted='true' loop='true'></video>
	  
	   <div class="mobile">
           <a href="home.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a>
           <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a>
		   <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a>
           <a href="contact.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a>

       </div>
	 
	   
	   
	  
	</body>
	
</html>