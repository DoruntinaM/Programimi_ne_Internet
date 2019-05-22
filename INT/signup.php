<<<<<<< HEAD
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
writeLog('Dikush e ka vizituar register.php');
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
} else { ?>
<!DOCTYPE html>
<html>
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
<!DOCTYPE html>
<html>
        
    <?php include ('header.php'); ?>
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5

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
<<<<<<< HEAD
                     <form name=Form1 method="post" action="signup.php" onsignup="return myfunction1()" autocomplete="on"> 
=======
                     <form name=Form1 method="post" onsignup="return myfunction1()" autocomplete="on"> 
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
                                <h2> Sign Up </h2> 
							
                                    <input class="long"  name="username" required="required" type="text" placeholder="Username" />                               
                                    <input class="long"  name="password" required="required" type="password" placeholder="Password"/>                             
<<<<<<< HEAD
                                    <input  class="name"  name="name" required="required" type="text" placeholder="First Name"/>
=======
                                    <input  class="name"  name="firstname" required="required" type="text" placeholder="First Name"/>
>>>>>>> a5deb9a22e2b656b755abfef77b2a696558769b5
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
                font size: 15px;
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
    
    
    
                
    
    
    
        
              <button class="button" onclick="location.href='localhost/login.php"  >SUBMIT</button>

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
