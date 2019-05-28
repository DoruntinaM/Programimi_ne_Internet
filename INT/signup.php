<?php
require("Functions.php");
$functionObj = new Functions();

$functionObj->writeLog('Dikush e ka vizituar signup.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include __DIR__ . '\LidhjaDB.php';
  include __DIR__ . '\SaltedHash.php';
  function testoInputet($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // Parametrat
  $username = testoInputet($_POST['username']);
  $name = testoInputet($_POST['name']);
  $Lastname = testoInputet($_POST['lastname']);
  $password = testoInputet($_POST['password']);
  $passwordHash = createPassword($password);
  $passwordErr = $usernameErr = $passwordErr = $nameErr = $LastnameErr = " ";
  if(empty($name) || !preg_match("/^[a-zA-Z ]*$",$name)){
      $nameErr = "Emri duhet te permbaje vetem shkronja!";
  }if(empty($Lastname) || !preg_match("/^[a-zA-Z ]*$",$Lastname)){
      $LastnameErr = "Mbiemri duhet te permbaje vetem shkronja!";
  }if(empty($username) || !preg_match("/^[A-Za-z][A-Za-z0-9]{5,31}$/",$username)){
      $usernameErr = "Username mund te permbaje vetem shkronja dhe numra!";
  }if(empty($password) || !preg_match("^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$",$password)){
      $passwordErr = "Passwordi duhet te permbaje se paku 8 karaktere, se paku nje numer, nje shkronje te vogel dhe nje shkronje te madhe!";
    }
if((strlen($nameErr)>1) || (strlen( $LastnameErr)>1) || (strlen($usernameErr)>1) || (strlen($passwordErr)>1)){
    header("location: signup.php");
}else{

    
  // Db dhe escape
  $db = connectDb();
  [$escapedUsername, $escapedName,$escapedLastname,] = $functionObj->escape($db, [$username, $name,$Lastname]);
  $query = "INSERT INTO USERS (username,password,fName,Sirname) VALUES " 
  . "('$escapedUsername', '$passwordHash', '$escapedName','$escapedLastname')";
  $db->query($query);
  $functionObj->writeLog($query);
  $functionObj->writeLog('Error: ' . $db->error);
  header("Location: login.php"); }
} else { ?>
<!DOCTYPE html>
<html>
    <?php include ('header.php'); ?>
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="signup.css">
</head>
    <style>
			
            body
				{
					background-attachment: fixed;
					background-size: 100% 100%;
                   
                    
				}
        
        
            
		</style>
                 <div id="container"><br>
                     <div id="signup-right">
				     <div class="sign-margin"></div>
                     <form name=Form1 method="post" action="signup.php" onsignup="return myfunction1()" autocomplete="on"> 
                                <h2> Sign Up </h2> 
							
                                    <input class="long"  name="username" type="text" placeholder="Username" /> 
                                    <?php echo $usernameErr?>                          
                                    <input class="long"  name="password" type="password" placeholder="Password"/> 
                                    <?php echo $passwordErr ?>                      
                                    <input  class="name"  name="name" type="text" placeholder="First Name"/>
                                    <?php echo $nameErr  ?>                     
                                    <input  class="name"  name="lastname" type="text" placeholder="Last Name"/>
                                    <?php echo $LastnameErr?>                      

                                          
                                    <input type='file' name='file1' id='file1' />Photo(Optional)
							
								<select id="passwordsignup"  name="gender"  placeholder="Gender" required="required">
                                        <option>Gender</option>
										<option>Male</option>
										<option>Female</option>
								</select>(Optional)
                             
           					<button class="btn-signup" onclick="myfunction1()" type="submit" name="signup" >Sign Up</button>
                            </form>
                         </div>
							
        		<div id="signup-left">
				<h1>Create an account...</h1>
					<br>
					<p>
					</p>
			</div>
			<div class="clear"></div>
                     
                     <div class="clear"></div>
    </div>
    </body>
    <?php include ('footer.php'); ?>
</html>
            <?php } ?>