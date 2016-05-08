<?php


class Contact
{

  public $name;
  public $email;
  public $phone;
  public $message;

  

	
	 public function sendEmail($name,$email,$phone,$message){
	 
    $this->to = 'y.harkati@yahoo.fr';
     $this->name = strip_tags($name);
      $this->email = strip_tags($email);
      $this->phone = strip_tags($phone);
      $this->message = strip_tags($message);
    
    $this->headers = 'From:'.$this->email.'//'.$this->phone."\r\n";
    $this->headers.='MIME-version: 1.0'."\r\n";
    $this->headers.='Content-type: text/html; charset=utf-8'."\r\n";
    
    return mail($this->to,$this->name,$this->message,$this->headers);
  }
 
}

?>