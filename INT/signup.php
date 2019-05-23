<?php
function writeLog($txt = "") {
  file_put_contents(__DIR__ . '/../log.txt', $txt . PHP_EOL , FILE_APPEND | LOCK_EX);
}
function escape($db, array $strings) {
  return array_map(
    function ($str) use ($db) {
      return $db->real_escape_string($str);
    }, $strings);
}
writeLog('Dikush e ka vizituar signup.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include __DIR__ . '\LidhjaDB.php';
  include __DIR__ . '\SaltedHash.php';
  
  // Parametrat
  $username = $_POST['username'];
  $name = $_POST['name'];
  $Lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $passwordHash = createPassword($password);
  
  // Db dhe escape
  $db = connectDb();
  [$escapedUsername, $escapedName,$escapedLastname,] = escape($db, [$username, $name,$Lastname]);
  $query = "INSERT INTO USERS VALUES" 
  . "('$escapedUsername', '$passwordHash', '$escapedName','$escapedLastname')";
  $db->query($query);
  writeLog($query);
  writeLog('Error: ' . $db->error);
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
                                
							
							
								<select id="passwordsignup"  name="gender" required >
										<option>Male</option>
										<option>Female</option>
								</select>
                             
           					<button class="btn-signup" onclick="myfunction1()" type="submit" name="signup" >Sign Up</button>
                               <script>
                                        function myfunction1()
                                {   var x=document.forms["Form1"]["username"].value;
                                var y=document.forms["Form1"]["password"].value;
                                var z=document.forms["Form1"]["firstname"].value;
                                var v=document.forms["Form1"]["lastname"].value;

                                if(x=="")
                                   alert("In order to sign in username must be filled");
                                   else
                                       if(y=="")
                                        alert("In order to sign in password must be filled");
                                        else 
                                           if(z=="")
                                           alert("In order to sign in first name must be filled");
                                           else 
                                               if(v=="")
                                               alert("In order to sign in last name must be filled");
                                               else
                                    alert("You have successfully loged in.");
                                }
                                </script>
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
         <?php 
        header("Location: login.php"); 
        } ?>
    

    
