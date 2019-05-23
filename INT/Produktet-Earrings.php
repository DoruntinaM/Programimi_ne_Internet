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


   
          
        
         
           

</body>

<?php include ('footer.php'); ?>
    
     </html>



