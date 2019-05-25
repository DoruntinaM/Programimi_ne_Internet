<?php 

require('Validation.php');

$mailobj=new Validation('doruntina.murtezaj@gmail.com');
$to = $mailobj->getTo();
$mailobj->setSubject('Form Submission');
$subject=$mailobj->getSubject();

if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
    $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
    $messages = $mailobj->validateAndsendMailMessage($_POST['name'],$_POST['email'], $_POST['phone'], $message);

    echo "<script  language='Javascript'>alert('{$messages[0]}');</script>";
   
/*
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

        */
    }   





 ?>



