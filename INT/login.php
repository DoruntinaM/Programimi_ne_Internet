<?php
function writeLog($txt = "") {
    file_put_contents(__DIR__ . '/../log.txt', $txt . PHP_EOL , FILE_APPEND | LOCK_EX);
  }
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include __DIR__ . '\LidhjaDB.php';
  include __DIR__ . '\SaltedHash.php';
  
  // Parametrat
  $username = $_POST['username'];
  $password = $_POST['password'];
  $db = connectDb();
  $escapedUsername = $db->real_escape_string($username);
  $query = "SELECT * FROM USERS WHERE username='$escapedUsername';";
  $result = $db->query($query);
  writeLog("Login attempt nga: $username");
  if ($result->num_rows == 0) {
    writeLog("Username nuk ekziston");
  } else {
    $row = $result->fetch_assoc();
    $dbPassword = $row['password'];
    if (checkPassword($password, $dbPassword)) {
      writeLog("Login valid");
      $_SESSION['username'] = $row['username'];
      header("Location: LJ.php"); 
      echo "Success";
    } else {
    header("Location: login.php"); 
    writeLog("Login jo-valid");
    }
  }
} else { ?>
<!DOCTYPE html>
<html>
        <?php include ('header.php'); ?>
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="loginstyle.css">
    </head>
    <style>
			body
				{
                    background-image= "pictures/foto.jpg";
					background-attachment:fixed;
					background-size: 100% 100%;
				}
		</style>
               <div id="container"><br>
			    <div id="login-right">
				<div class="login-margin"></div>
				<form action ="login.php" method="POST"  autocomplete="on"> 
                                <h2>Login</h2> 
                                <input class="long" name="username" type="text" placeholder="Username" required  autofocus >
                                <input class="short-pass" name="password" type="password" placeholder="Password" required >       
                                
                                <button class="btn-login"  type="submit" name="login">Login</button>	
                
                            </form>
              
                </div>
               			
        		<div id="login-left">
				<h1>Welcome to Our Website</h1>
					<br>
					<p>
					Thank you for choosing our page.<br> 
					Get in-the-moment updates on the newest <br> 
                    jewelleries that interest you. We connect you with <br>the most sold jewelleries.<br>Enjoy.
					</p>
			</div>
			<div class="clear"></div>
    </div>
    </body>
    <?php include ('footer.php'); ?>
         </html>
         <?php } ?>

