<!DOCTYPE html>
<html>
    
    <?php include ('header.php'); ?>
       
<body>
  <head>

<title>Aksesoret</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="body.html">

<style>
.mySlides {display:none;}
.row {
  display: flex;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 40px;
  margin-bottom: 40px;
}
.row2 {
  display: flex;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 40px;
  margin-bottom: 40px;
}
.column {
  flex: 25%;
  padding: 0px;
}
.card {
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  margin-bottom: 20px;
  margin-top: 20px;
  background-color: antiquewhite;
  
}
.price {
  color: grey;
  font-size: 22px;
}
.card button:hover {
  opacity: 0.7;
}
div.t {
  text-align: center;
}



</style>
</head>







<div class="content display-container">
  <img class="mySlides" src="pictures/1.jpg" style="width:100%">
  <img class="mySlides" src="pictures/2.jpg" style="width:100%">
  <img class="mySlides" src="pictures/3.jpg" style="width:100%">
  <img class="mySlides" src="pictures/4.jpg" style="width:100%">
  <img class="mySlides" src="pictures/6.jpg" style="width:100%">

</div>

<script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 3000); 
        }
        </script>
       
       



<div class="row">
 
        <div class="column">
<div class="card">
    
        <img src="pictures/r1.jpg" alt="OW ring" style="width:100%">
        <h1>Oliwer Weber</h1>
        <p class="price">$68</p>
        <p>Ring Extase rhodium chrome L</p>
        
    </div>
        </div>

        
        <div class="column">
      <div class="card" >
            <img src="pictures/r2.jpg" alt="OW ing nr.2" style="width:100%">
            <h1>Oliwer Weber</h1>
            <p class="price">$102</p>
            <p>Ring Regal rhod. violet L</p>
            
     </div>
        </div>

        <div class="column">
        <div class="card" >
            <img src="pictures/r3.jpg" alt="OW ing nr.3" style="width:100%">
            <h1>Oliwer Weber</h1>
            <p class="price">$48</p>
            <p>Ring Jolie 925AG rhod. green</p>
            
     </div>

        </div>

        <div class="column">
     <div class="card">
            <img src="pictures/r4.jpg" alt="Swarovski nr1" style="width:100%">
            <h1>Swarovski</h1>
            <p class="price">$118</p>
            <p>LOLLYPOP RING, BLACK, ROSE GOLD</p>
            
     </div>
     </div>


    </div>
    <br>
    <div class="row2">

            <div class="column">
    <div class="card">
            <img src="pictures/r5.jpg" alt="P ring" style="width:100%">
            <h1>Pandora</h1>
            <p class="price">$168</p>
            <p>Fairytale Tiara Ring, Clear CZ</p>
            
        </div>
            </div>
    
            
            <div class="column">
          <div class="card" >
                <img src="pictures/r7.jpg" alt="P ring nr.2" style="width:100%">
                <h1>Pandora</h1>
                <p class="price">$126</p>
                <p>Classic Elegance Ring, Clear CZ</p>
                
         </div>
            </div>
    
            <div class="column">
            <div class="card" >
                <img src="pictures/r9.jpg" alt="P ring nr.3" style="width:100%">
                <h1>Pandora</h1>
                <p class="price">$148</p>
                <p>Vintage Elegance Ring, Clear CZ</p>
                
         </div>
    
            </div>
    
            <div class="column">
         <div class="card" >
        <img src="pictures/r10.jpg" alt="P nr.4" style="width:100%">
            <h1>Pandora</h1>
            <p class="price">$150</p>
            <p>July Droplet Ring, Synthetic Ruby</p>
                
         </div>
         </div>
         </div>
<br>
<br>
<br>
<div class="t">
         <p style="font-size:35px;"><font color="pink" ><big><big>GIVE THE GIFT OF STYLE...</big></big>
         </font></p>
         <p>PROGRAM BENEFITS

                The LUXURY JEWELLERY unites crystal enthusiasts of all ages from all over the world and offers its members a whole range of special benefits.
                Join this fabulous community as a new member, renew your current membership, or offer <abbr title="LUXURY JEWELLERY">LJ</abbr> membership as a gift.
                
                </p>
         </div>


        <svg width="400" height="180">
            <rect x="50" y="20" rx="20" ry="20" width="25" height="25"
            style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
          Sorry, your browser does not support inline SVG.
          </svg>


          <canvas id="myCanvas" width="1320" height="100" style="border:1px solid #d3d3d3;">
            Your browser does not support the HTML5 canvas tag.</canvas>
            
            <script>
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");
            
            var grd = ctx.createLinearGradient(0,0,1500,0);
            grd.addColorStop(0,"red");
            grd.addColorStop(1,"white");
            
            ctx.fillStyle = grd;
            ctx.fillRect(10,10,2300,80);
            </script>
                            

          
        
         
           

</body>









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



            



    
          <button class="button" onclick="validateForm()"  >SUBMIT</button>


       
            
           
        
          </div>
        </div>
        
        </body>
        
        </footer>
     </html>