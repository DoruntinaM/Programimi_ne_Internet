<?php
include('LidhjaDB.php');

$name=$_POST['productname'];

if (!preg_match("/^[a-zA-Z ]*$/",$name))  {
   echo  'Emri duhet te permbaje vetem shkronja!';
  


}

$brand=$_POST['brandname'];

if (!preg_match("/^[a-zA-Z ]*$/",$brand))  {
    echo  'Brendi duhet te permbaje vetem shkronja!';
 }

$quantity=$_POST['quantity'];

$con = connectDB();

if($con->connect_error){
    echo 'database connection error';
}

$stmt =$con->prepare("INSERT INTO products (name, brand, quantity) VALUES (?, ?, ?)");

$stmt->bind_param("ssi",$name,$brand,$quantity);

if($stmt->execute()){
    echo 'success';
}else{
    echo 'failure'; 

}

?>