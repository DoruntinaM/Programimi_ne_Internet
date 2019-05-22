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
  <img class="mySlides" src="pictures/5.jpg" style="width:100%">
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
    
        <img src="pictures/p1.jpg" alt="OW earrings" style="width:100%">
        <h1>Oliwer Weber</h1>
        <p class="price">$85</p>
        <p>Earrings Diva rhod. crystal</p>
        
    </div>
        </div>

        
        <div class="column">
      <div class="card" >
            <img src="pictures/p2.jpg" alt="OW earrings nr.2" style="width:100%">
            <h1>Oliwer Weber</h1>
            <p class="price">$50</p>
            <p>Oliver Weber Women's Rhodium Uno </p>
            
     </div>
        </div>

        <div class="column">
        <div class="card" >
            <img src="pictures/p3.jpg" alt="OW earrings nr.3" style="width:100%">
            <h1>Oliwer Weber</h1>
            <p class="price">$130</p>
            <p>Oliver Weber earrings Alas 9892 </p>
            
     </div>

        </div>

        <div class="column">
     <div class="card">
            <img src="pictures/p4.jpg" alt="Ruby earrings" style="width:100%">
            <h1>Ruby </h1>
            <p class="price">$1180</p>
            <p>Roesia Natural Ruby and Diamond </p>
            
     </div>
     </div>


    </div>
    <br>
    <br>
    <br>
    <div class="row2">

            <div class="column">
    <div class="card">
            <img src="pictures/p5.jpg" alt="Ruby earrings" style="width:100%">
            <h1>Ruby</h1>
            <p class="price">$308</p>
            <p>Oval Ruby & Diamond Claw Set Cluster </p>
            
        </div>
            </div>
    
            
            <div class="column">
          <div class="card" >
                <img src="pictures/p6.jpg" alt="Swarovski Earrings" style="width:100%">
                <h1>Swarovski</h1>
                <p class="price">$200</p>
                <p>Baron Pierced Earrings, Blue, Rhodium </p>
                
         </div>
            </div>
    
            <div class="column">
            <div class="card" >
                <img src="pictures/p7.jpg" alt="Swarovski earrings" style="width:100%">
                <h1>Swarovski</h1>
                <p class="price">$600</p>
                <p>Monemel swarovski earrings</p>
                
         </div>
    
            </div>
    
            <div class="column">
         <div class="card" >
        <img src="pictures/p8.jpg" alt="Diamond earrings" style="width:100%">
            <h1>Diamond </h1>
            <p class="price">$1500</p>
            <p>Diamond Earrings in 14k White Gold </p>
                
         </div>
         </div>
         </div>
<br>
<br>
<br>
<br>
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



