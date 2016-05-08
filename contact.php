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
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
	   <link rel='stylesheet' href='css/style.css'>
	   <link rel='stylesheet' href='css/contact.css'>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		 <script type="text/javascript" src="js/contactMessage.js"></script>
	   <!--<script type="text/javascript" src="js/jquery.js"></script>-->
	
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
	<div class="row">
      <div class="col">
        <div class="labox">
		 <span id="finMessage"></span>
          <form method="post" class="form-horizontal" name="postForm">
          <fieldset>
            <legend class="text-center header"><?php echo $lang[$_SESSION['lang']]['contactme']; ?></legend>    
            
               <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"><img src="css/images/iconUser.JPG"/></i></span>
              <div class="col-md-8">
                <input id="lname" name="name" type="text" placeholder="<?php echo $lang[$_SESSION['lang']]['lname']; ?>" class="form-control">
              </div>
            </div>    
            
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"><img src="css/images/iconEmail.JPG"/></i></span>
              <div class="col-md-8">
                <input id="email" name="email" type="text" placeholder="<?php echo $lang[$_SESSION['lang']]['emailAddress']; ?>" class="form-control">
              </div>
            </div>

              <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"><img src="css/images/iconPhone.JPG"/></i></span>
              <div class="col-md-8">
                <input id="phone" name="phone" type="text" placeholder="<?php echo $lang[$_SESSION['lang']]['phone']; ?>" class="form-control">
              </div>
            </div>
    
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"><img src="css/images/iconMessage.JPG"/></i></span>
              <div class="col-md-8">
                <textarea class="form-control" id="message" name="message" placeholder="<?php echo $lang[$_SESSION['lang']]['entrerMess']; ?>" rows="7" cols="50"></textarea>
              </div>
            </div>
    
            <div class="form-group fgb">
              <div class="col-md-12 text-center">
                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg"><?php echo $lang[$_SESSION['lang']]['submit']; ?></button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>



		
		
	
	  
	   <video id='background' src='fond.mp4' autoplay='true' muted='true' loop='true'></video>
	 
	     <div class="mobile">
           <a href="index.php"><?php echo $lang[$_SESSION['lang']]['home']; ?></a>
           <a href="works.php"><?php echo $lang[$_SESSION['lang']]['works']; ?></a>
		   <a href="about.php"><?php echo $lang[$_SESSION['lang']]['about']; ?></a>
           <a href="realisations.php"><?php echo $lang[$_SESSION['lang']]['contact']; ?></a>

       </div>
	   
	   
	    
	   <script type="text/javascript">  
			
			jQuery(function($){
			   var windowWidth = $(window).width();
	             if(windowWidth > 822){
	                   $(".container").delay(500).animate({ "top" : "70px" }, 2000);

                  }
				  
				 
             });
			 
			
			
			
		    
		</script>
	  
	</body>
	
</html>