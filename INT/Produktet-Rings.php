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
            <p >July Droplet Ring, Synthetic Ruby</p>
                
         </div>
         </div>
         </div>
<br>
<br>
<br>
    
    <pre ><h2>    2018 has been a great year for our company and for the moment these are the statistics: </h2></pre >
    <br>
    <div style="width:600px; margin:0 auto;">
    <?php
$rings = array
  (
  array("Oliver Weber",52,38),
  array("Swarovski",45,33),
  array("Pandora",35,20),
  array("Tiffany",17,5)
  );

 
echo $rings[0][0].":In stock: ".$rings[0][1].", sold: ".$rings[0][2].".<br>";
echo $rings[1][0].":In stock: ".$rings[1][1].", sold: ".$rings[1][2].".<br>";
echo $rings[2][0].":In stock: ".$rings[2][1].", sold: ".$rings[2][2].".<br>";
echo $rings[3][0].":In stock: ".$rings[3][1].", sold: ".$rings[3][2].".<br>";
?>
  <br>
        
<?php
$data = array("Oliver Weber", "Swarovski", "Tiffany", "Pandora");
echo "Rndomly the ring that fits you the best is: " . $data[array_rand($data)];
?>
 <br>
<?php
$ring = array("Oliver Weber", "Swarovski", "Tiffany", "Pandora");
echo "The number of top brands that we have is :";
echo count($ring);
?>
    </div>
<div class="t">
         <p style="font-size:35px;"><font color="pink" ><big><big>GIVE THE GIFT OF STYLE...</big></big>
         </font></p>
         <p>PROGRAM BENEFITS

                The LUXURY JEWELLERY unites crystal enthusiasts of all ages from all over the world and offers its members a whole range of special benefits.
                Join this fabulous community as a new member, renew your current membership, or offer <abbr title="LUXURY JEWELLERY">LJ</abbr> membership as a gift.
                
                </p>
         </div>


   <br>


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

    <?php include ('footer.php'); ?>
    
     </html>