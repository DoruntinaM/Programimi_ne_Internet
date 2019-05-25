<?php 



if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='doruntina.murtezaj@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if (!preg_match("/^[a-zA-Z ]*$/",$name))  {
        echo '<h4>Emri duhet t&#235; p&#235;rmbaj&#235; vet&#235;m shkronja !</h4><br>';

    }
    if (strlen($name)<3)
    {
	 echo '<h4>Emri duhet t&#235; p&#235;rmbaj&#235; s&#235; paku 3 shkronja !</h4><br>';
    }
    if (!preg_match("/^([a-z0-9_\.-]+){4}@([a-z]+){3}\.([a-z\.]{2,6})$/",$email))  {
        echo '<h4 class="heading">Email-i nuk &#235;sht&#235; n&#235; formatin e duhur !</h4><br>';
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{6}$/", $phone)) {
       echo  '<h4>Formati i numrit t&#235 dh&#235n&#235 nuk &#235sht&#235 valid!</h4><br>';
    
        } 
    
    
    
        else{

   
        if(mail($to,$subject,$message,$headers)){
        
            // echo"<h1>Sent Successfully! Thank you"." ".$name.",We will contact you shortly!</h1>";
            // header("Location: LJ.php");
            echo('<script language="Javascript">alert("Sent Successfully!");</script>');
        }
        else {
            // echo "Something went wrong!";
            // header("Location: LJ.php");
            echo('<script language="Javascript">alert("Something went wrong!");</script>');
        }
    }   
}




 ?>



