<?php
 
include('lang.php');  
include('ManageLang.php');
require_once("contactClass.php");

$ok = false;




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name        = strip_tags($_POST['name']); 
      $email       = strip_tags($_POST['email']); 
	  $phone       = strip_tags($_POST['phone']);
	  $message     = strip_tags($_POST['message']);
	  global   $lang; 
	 
			$errorsValid = validateForm($name, $email , $phone, $message );
			  if(count($errorsValid)==0){
					  
					  $contact=new Contact();
					
						if($contact->sendEmail($name,$email,$phone,$message)) {
							unset($name);
							unset($phone);
							unset($message);
							unset($email);
							//header("Location:thanks.php?name='".$name."'");
							header('Content-Type: application/json');
							echo json_encode(array( "success"  => $lang[$_SESSION['lang']]['messageSent'] ));
						}else{
						    // distinction d'erreurs en javascript grace aux clés de nom differentes													
							header('Content-Type: application/json');
							header('HTTP/1.1 500 Internal Server Error');
							echo json_encode(array( "errorMessage"  =>  array("ddd" => $lang[$_SESSION['lang']]['errorMess'] . "YYYYYYYYYYYYYY")));   //voir si exception se propage ou non avec php->si oui pb json -> faut arreter la propagation de l'exception
						}
			   
	
			   }else{			   
										// reponse contient  un tableau comme :   {validationErrors = {name="saisir votre nom svp", "email"= "email mal formé"   }   }   ->  $each(data.validationErrors, function(key, val )
										header('Content-Type: application/json');
										header('HTTP/1.1 500 Internal Server Error');
			   							echo json_encode( array("validationErrors"  => $errorsValid)); // gestion cas d'erreur remplissage formulaire mal effectué

			   
			  
											//
// validate email
// validate name
// validate message
// validate phone


                }			   

}


function getErrorMessage($language, $key){
	global $lang;
	return utf8_encode($lang[$language][$key]);

}


// renvoie un tableau contenant pour chaque champ erroné le message d'eerreur
// si aucune erreur le tabeau est vide

function validateForm($name, $email , $phone, $message ){
   $errors  = array();
    global   $lang; 

	if(empty($name)){
		$errors["lname"]= $lang[$_SESSION['lang']]['errorName'];
	
	}


	if(empty($email)){

		$errors["email"]= $lang[$_SESSION['lang']]['errorEmail'];

	}
	
	//if(empty($email)   faire le check avec filter validate

	//	$errors["email"]= $lang[$_SESSION['lang']]['errorEmailEmpty'];

	//}
	
	/*   prochaine fois associer le tableau d'erreurs dans l'ajax */
	
	
	if (empty($phone)){
		
      $errors["phone"]=  getErrorMessage($_SESSION['lang'], 'errorPhone');

	}	
	
	
	if(empty($message)){
	
	   $errors["message"]=$lang[$_SESSION['lang']]['errorMessage'];

	}


	return $errors;
}
			              
						  
				  
	

?>

