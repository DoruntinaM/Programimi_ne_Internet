<?php
require("Mail.php");
class Validation extends Mail {

private $to,$subject;


public function __construct($to)
{
    $this->to=$to;

}
public function getTo(){
    return $this->to;
}


public function getSubject(){
    return $this->subject;
}

public function setSubject($subject){
    $this->subject=$subject;
}


public function validateAndsendMailMessage($name,$email,$phone,$message){
    $validationMessages = [];    
    $headers="From: ".$email;

    if (!preg_match("/^[a-zA-Z ]*$/",$name))  {
        array_push($validationMessages, 'Emri duhet te permbaje vetem shkronja!');
    }
    if (strlen($name)<3)
    {
        array_push($validationMessages,'Emri duhet te permbaje se paku 3 shkronja!');
    }
    if (!preg_match("/^([a-z0-9_\.-]+){4}@([a-z]+){3}\.([a-z\.]{2,6})$/",$email))  {
        array_push($validationMessages,'Email-i nuk eshte ne formatin e duhur!');
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{6}$/", $phone)) {
        array_push($validationMessages,'Formati i numrit te dhene nuk eshte valid!');
    } 

    if (count($validationMessages)==0){
        $sendMailMessage = $this->sendMail($this->to,$this->subject,$message,$headers);
        array_push($validationMessages,'Te dhenat jane valide!');
       
    }
    return $validationMessages;
}





}
?>