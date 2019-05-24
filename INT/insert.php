<?php
include('LidhjaDB.php');

$name=$_POST['productname'];
$brand=$_POST['brandname'];
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