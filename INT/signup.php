<?php
require("Functions.php");
$functionObj = new Functions();

$functionObj->writeLog('Dikush e ka vizituar signup.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include __DIR__ . '\LidhjaDB.php';
  include __DIR__ . '\SaltedHash.php';
  
  // Parametrat
  $username = $_POST['username'];
  $name = $_POST['name'];
  $Lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $passwordHash = createPassword($password);
  public function validimSignup($username,$name,$Lastname,$password){
  // Db dhe escape
  $db = connectDb();
  [$escapedUsername, $escapedName,$escapedLastname,] = $functionObj->escape($db, [$username, $name,$Lastname]);
  $query = "INSERT INTO USERS (username,password,fName,Sirname) VALUES " 
  . "('$escapedUsername', '$passwordHash', '$escapedName','$escapedLastname')";
  $db->query($query);
  $functionObj->writeLog($query);
  $functionObj->writeLog('Error: ' . $db->error);
  header("Location: login.php"); 
 
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
							
                                    <input class="long"  name="username" required="required" type="text" placeholder="Username" />                               
                                    <input class="long"  name="password" required="required" type="password" placeholder="Password"/>                        
                                    <input  class="name"  name="name" required="required" type="text" placeholder="First Name"/>
                                    <input  class="name"  name="lastname" required="required" type="text" placeholder="Last Name"/>
                                          
                                    <input type='file' name='file1' id='file1' />(Optional)
							
								<select id="passwordsignup"  name="gender" required >
										<option>Male</option>
										<option>Female</option>
								</select>(Optional)
                             
           					<button class="btn-signup" onclick="myfunction1()" type="submit" name="signup" >Sign Up</button>
                            </form>
                            <?php
                            foreach ($_FILES as $key=>$value)
                            {
                                    
                            }
                            ?>
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
         <?php 
        header("Location: login.php"); 
        } ?>
    

    
