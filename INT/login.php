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
				
				<form action ="loginprocess.php" method="POST"  autocomplete="on"> 
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