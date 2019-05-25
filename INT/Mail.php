<?php
class Mail{

    public function sendMail($to,$subject,$message,$headers){
    
    
        if(mail($to,$subject,$message,$headers)){
        
            return "Sent Successfully!";
        }

        else {
            return "Something went wrong!";
        }    
    
    }
}
?>