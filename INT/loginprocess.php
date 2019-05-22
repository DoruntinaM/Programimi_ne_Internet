<?php 
// get values from form in login.php file
$username = $_POST['username'];
$password = $_POST['password'];

// to prevent mysql injections 
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("login");

//query the databse for user 
$result = mysql_query("select * from users where username = '$username' and  password = '$password'")
          or die ("Failed to query database ".mysql_error());

$row = mysql_fetch_array($result);
    if ($row['username']== $username && $row['password']==$password){
        echo "Login success !!! Welcome ".$row['username'];
    }else {
        echo "Failed to login!";
    }
?>