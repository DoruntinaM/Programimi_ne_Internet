<?php

require("Database.php");
require("Functions.php");
$functionsObj = new Functions();
include ('header.php');

require ("Facebook/autoload.php");
if(isset($_GET['state'])) {
  $_SESSION['FBRLH_state'] = $_GET['state'];
}
$fb = new \Facebook\Facebook([
  'app_id' => '345652152791880',
  'app_secret' => '55472bdf18e60b992a86b4dc99fe90d0',
  'default_graph_version' => 'v3.3',
  //'default_access_token' => '{access-token}', // optional
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include __DIR__ . '\LidhjaDB.php';
  include __DIR__ . '\SaltedHash.php';
  
  // Parametrat
  $username = $_POST['username'];
  $password = $_POST['password'];
  $db = connectDb();
  $databaseObj = new Database($db);

  $escapedUsername = $databaseObj->escapeString($username);
  $query = "SELECT * FROM USERS WHERE username='$escapedUsername';";
  $result = $databaseObj->queryResult($query);
  $functionsObj->writeLog("Login attempt nga: $username");
  if ($result->num_rows == 0) {
    header("Location: login.php"); 
    $functionsObj->writeLog("Username nuk ekziston");
    $_SESSION['mesazhi'] = "Username ose Password gabim!";
  } else {
    $row = $result->fetch_assoc();
    $dbPassword = $row['password'];
    if (checkPassword($password, $dbPassword)) {
      $functionsObj->writeLog("Login valid");
      $_SESSION['username'] = $row['username'];
      if(!empty($_POST['remember'])){
        setcookie("username",$username,time()+(365*24*60*60));
        setcookie("password",$password,time()+(365*24*60*60));
      }else{
        if(isset($_COOKIE['username'])){
          setcookie("username","");
        }if(isset($_COOKIE['password'])){
          setcookie("password","");
        }
    }
      header("Location: LJ.php"); 
    } else {
    header("Location: login.php"); 
    $functionsObj->writeLog("Login jo-valid");
    $_SESSION['mesazhi'] = "Username ose Password gabim!";
    }
  }
} else { ?>
<!DOCTYPE html>
<html>
       
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
        <?php
        if(isset($_SESSION['mesazhi'])){
          echo $_SESSION['mesazhi'];
        }
        ?>
				<form action ="login.php" method="POST"  autocomplete="on"> 
                                <h2>Login</h2> 
                                <input class="long" name="username" type="text" placeholder="Username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" required  autofocus />
                                <input class="short-pass" name="password" type="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" required />
                                <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])){?>checked<?php }?>/> 
                                <label>Remember Me</label>
    
                                <button class="btn-login"  type="submit" name="login">Login</button>	
                                <?php if(empty($access_token)) {
                                echo "<a href='{$fb->getRedirectLoginHelper()->getLoginUrl("http://localhost/login.php")}'>Login with Facebook </a>";
                                } 
                                $access_token = $fb->getRedirectLoginHelper()->getAccessToken();
                                /*Step 4: Get the graph user*/
                                if(isset($access_token)) {
                                    try {
                                        $response = $fb->get('/me',$access_token);
                                        $fb_user = $response->getGraphUser();
                                        $f = $fb_user->getName();
                                        echo $f;
                                        $_SESSION['username'] = $f;
                                        header("location: lj.php");
                                        //  var_dump($fb_user);
                                    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
                                        echo  'Graph returned an error: ' . $e->getMessage();
                                    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                                        // When validation fails or other local issues
                                        echo 'Facebook SDK returned an error: ' . $e->getMessage();
                                    }
                                }
                                ?>
                
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

