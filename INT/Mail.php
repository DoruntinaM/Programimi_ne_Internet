<?php
class Mail{

    public function sendMail($to,$subject,$message,$headers){
    
    
        if(mail($to,$subject,$message,$headers)){
        
           
          echo "<script  language='Javascript'>alert('Dergimi eshte kryer me sukses');</script>";
         // return  "Sent Successfully!";
           
        }

        else {
          
          echo "<script  language='Javascript'>alert('Dergimi ka deshtuar!');</script>";
              // return "Something went wrong!";
        }    
    
    }
}
?>
