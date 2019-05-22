<?php
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
      echo "Success";
    } else {
      writeLog("Login jo-valid");
    }
  }
} else { ?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
        <header>
                <head>
                    <title>LUXURY JEWELLERY</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" , content="width=device-width, initial-scale=1.0">
                    <link href="styleheader.css" type="text/css" rel="stylesheet">             
                </head> 
                <body>
                <div class="top" style="font-size:12px;">
                    <ul id="left-navheader">
                        <li>Call Us Now:+383 227788</li>
                        <li>Email:<a href="mailto:luxury.jewelry@luxjewelry.com">luxury.jewelry@luxjewelry.com </a></li>
                    </ul>
                    <ul id="right-navheader">
                        <li><a href="signup.php">Sign Up</a></li>
                        <li>| <a href="login.php">Login</a></li>
                        <li>| <a href="https://blog.feedspot.com/jewelry_rss_feeds/">RSS Feeds</a></li>
                        </ul>
                    </div>
                    <div class="molecular">
                        <div>
                        <table>
                            <tr>
                                <td width="400px" style="font-size:25px;"><font color="white" ><big><big>L</big></big>UXURY <big><big>J</big></big>EWELRY
                                </font></td>
                                <td> <br><br>
                                    <font size="2px"> 
                                        <a href="LJ.html">HOME</a>
                                        <a href="aboutus.html">ABOUT US</a>  
                                        <a href="Produktet-Rings.html">RINGS</a>
                                        <a href="Produktet-Earrings.html">EARRINGS</a> 
                                        <a href="Bracelet.html">BRACELETS</a>
                                        <a href="contactus.html">CONTACT </a> 
                                    </font>
                                    </td>
                                </td>
                            </tr>
                        </table>
                    </div>
                    </div>
                </body>
            </header>
=======
        <?php include ('header.php'); ?>
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="loginstyle.css">
    </head>
    <style>
<<<<<<< HEAD
            body
=======
			body
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
				{
                    background-image= "pictures/foto.jpg";
					background-attachment:fixed;
					background-size: 100% 100%;
				}
		</style>
<<<<<<< HEAD
        <div id="container"><br>
=======
               <div id="container"><br>
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
			    <div id="login-right">
				<div class="login-margin"></div>
                <?php
                if (isset($_SESSION['email'])) {
                echo "Jeni te loguar si " . $_SESSION['email'];
                }
                ?>
				<form action ="login.php" method="POST"  autocomplete="on"> 
                                <h2>Login</h2> 
                                <input class="long" name="username" type="text" placeholder="Username" required  autofocus >
                                <input class="short-pass" name="password" type="password" placeholder="Password" required >       
                                
                                <button class="btn-login"  type="submit" name="login">Login</button>
<<<<<<< HEAD
                            </form>
                </div>		
=======
                
                            </form>
                
                </div>
               			
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
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
<<<<<<< HEAD
    <footer>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                .footer{
                        position: fixed;
                     
                }
                a:link {
                color: rgb(197, 52, 52);
            }
            a:visited {
                color:rgb(197, 52, 52) ;
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            body {
                color: grey;
            }
            * {
                box-sizing: border-box;
            }
            .column {
                float: left;
                width: 33.33%;
                padding: 10px;
                height: 350px; 
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .button{
                background-color: rgb(197, 52, 52);
                border: none;
                color: white;
                border-radius: 8px;
                font-size: 16px;
                padding: 10px 14px;
                cursor: pointer;
                margin: 4px 0;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 4px 0;
                border-radius: 4px;
                background-color: rgb(51, 47, 47);
                border: none;
                font-size: 15px;
            }
            </style>
            <script>
                function validateForm() {
                  var x = document.forms["myForm"]["name"].value;
                  var y = document.forms["myForm"]["email"].value;
                  if (x == "") {
                    alert("Name must be filled out"); 
                  }
                  else
                     if(y==""){
                      alert("Email must be filled out");
                  }
                      else
                        {
                        alert("Thank you, your submission has been received");
                  }
                }
                </script>
            </head>
            <body>
            <div class="row">
              <div class="column" style="background-color:#282828;">
                <h2>LATEST POST(S)</h2>
                <br>
                <p>This is me today!</p>
                 <br>
                        <p>
                            I feel lovely and delicate…fancy and glamorous…stylish and sophisticated or exotic and flirty… 
        Just like the many facets of our crystals, our varied jewelry embodies different statements and will allow you to express yourself in the most self-confident manner.
        More than anything, the jewelry we wear is a wordless expression of our inner feelings and our state of mind. We wear it not only to feel beautiful, but also to make a personal statement.
                        </p>
                        <br>
                        <a href="https://www.thecut.com/2015/02/6-womens-hands-life-stories-jewelry.html">Read more  &#8921;</a>
              </div>
              <div class="column" style="background-color:#282828;">
                <h2>CONTACT DETAILS</h2>
                <br>
                <p>Luxury Jewelry<br> Pension Wedding, Schulstraße 40 <br>Berlin, Germany<br>13347<br>
                 <a href="https://www.google.com/maps/place/Pension+Wedding/@52.5511108,13.3648873,17z/data=!3m1!4b1!4m5!3m4!1s0x47a8522958d4765b:0x25fc2f3c9ef76fa!8m2!3d52.5511076!4d13.367076"><br>Click Here for a Map To Find US   &#8921;</a><br>Tel: +383 227788 <br>Fax: 222 8888<br>Email:<a href="mailto:luxury.jewelry@luxjewelry.com">luxury.jewelry@luxjewelry.com </a>
                 <br>
              </div>
              <div class="column" style="background-color:#282828;">
                <h2>Newsletter</h2>
                <br>
                <p>Subscribe to the newsletter and receive a 10% voucher. 
                    Receive email updates.
                 </p>
                <div>
                        <form name="myForm" action="/action_page.php"  onsubmit="return validateForm()" method="post" autocomplete="on">
                            <input type="text" id="fname" name="name"  placeholder="Name">
                            <input type="text" id="lname" name="email" placeholder="Email">
                            </form>
                <br>
              <button class="button" onclick="validateForm()"  >SUBMIT</button>
              </div>
            </div>
            </body>
            </footer>
         </html>
         <?php } ?>
=======

    <?php include ('footer.php'); ?>
    
         </html>
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
