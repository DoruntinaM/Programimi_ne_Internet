<?php
class Mail{

    public function sendMail($to,$subject,$message,$headers){
    
    
        if(mail($to,$subject,$message,$headers)){
        
           
          echo "<script  language='Javascript'>alert('Sent Successfully');</script>";
         // return  "Sent Successfully!";
           
        }

        else {
          
           echo "<script  language='Javascript'>alert('Something went wrong');</script>";
            //   return "Something went wrong!";
        }    
    
    }
}
?>
