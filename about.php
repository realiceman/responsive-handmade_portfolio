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
	   <link rel='stylesheet' href='css/style2.css'>
	   <script src="js/raphael.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  <script src="js/pie.js"></script>

	   <style>
	  
	   </style>
	</head>
	
	<body>
	    <div id="content">
		 <div id="contentInside">
			<a href="about.php?lang=en"><img src="images/en.JPG"/></a>
			<a href="about.php?lang=fr"><img src="images/fr.JPG"/></a>
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
		
		   <div id="pie1" >  
		     <span id="title"><b><a class="bracket">if[</a><?php echo $lang[$_SESSION['lang']]['propos']; ?><a class="bracket">]</a><br/>
			                     <a class="bracket">return{</a> <?php echo $lang[$_SESSION['lang']]['theprog']; ?><a class="bracket">}</a></b></span>
              <span id="title2"><b><a class="bracket">{</a> <?php echo $lang[$_SESSION['lang']]['theprog']; ?><a class="bracket">}</a></b></span>
		     <table> 
					<tr> 
						<th>Java JavaEE</th> 
						<td>40%</td> 
					</tr> 
					<tr> 
						<th>PHP5 </th> 
						<td>30%</td> 
					</tr> 
					<tr> 
						<th> JavaScript Jquery Ajax</th> 
						<td>15%</td> 
					</tr> 
					<tr> 
						<th> HTML5 CSS3</th> 
						<td>15%</td> 
					</tr> 
					
             </table> 
				<div id="holder"></div> 
		    </div>
			
		  <video id='background' src='tech1.mp4' autoplay='true' muted='true' loop='true'></video>
		
	  
	   <div class="mobile">
           <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a>
           <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a>
		   <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a>
           <a href="contact.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a>

       </div>
	 
	   
	   
	  
	</body>
	
</html>