<!DOCTYPE html>
<html>
  
<head>
<?php include ('header.php'); ?>
    
<script>
function showBrands(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // Kodi per IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // kodi per  IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getbrand.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>


<body>
  <head>

<title>Aksesoret</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="body.html">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

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
    
        <img src="pictures/pp1.jpg" alt="OW bracelet" style="width:100%">
        <h1>Oliwer Weber</h1>
        <p class="price">$89</p>
        <p>Oliver Weber Swarovski Crystal Torc </p>
        
    </div>
        </div>

        
        <div class="column">
      <div class="card" >
            <img src="pictures/pp2.jpg" alt="OW bracelet" style="width:100%">
            <h1>Oliwer Weber</h1>
            <p class="price">$98</p>
            <p>Bracelet Couple rhod. crystal</p>
            
     </div>
        </div>

        <div class="column">
        <div class="card" >
            <img src="pictures/pp3.jpg" alt="Swarovski bracelet" style="width:100%">
            <h1>Swarovski</h1>
            <p class="price">$230</p>
            <p>Swarovski Women's Rhodium Plating </p>
            
     </div>

        </div>

        <div class="column">
     <div class="card">
            <img src="pictures/pp4.jpg" alt="Swarovski bracelets" style="width:100%">
            <h1>Swarovski</h1>
            <p class="price">$580</p>
            <p>Stainless statement tennis bracelet</p>
            
     </div>
     </div>


    </div>
    <br>
    <br>
    <br>
    <div class="row2">

            <div class="column">
    <div class="card">
            <img src="pictures/pp5.jpg" alt="Swarovski bracelet" style="width:100%">
            <h1>Swarovski</h1>
            <p class="price">$3058</p>
            <p>18K White Gold Overlay Tennis Bracelet</p>
            
        </div>
            </div>
    
            
            <div class="column">
          <div class="card" >
                <img src="pictures/pp6.jpg" alt="Ruby bracelet" style="width:100%">
                <h1>Swarovski</h1>
                <p class="price">$2800</p>
                <p>Untreated Ruby and Pearl Bracelet</p>
                
         </div>
            </div>
    
            <div class="column">
            <div class="card" >
                <img src="pictures/pp7.jpg" alt="Ruby earrings" style="width:100%">
                <h1>Ruby</h1>
                <p class="price">$1680</p>
                <p>Delicate Retro 18k Yellow Gold Ruby </p>
                
         </div>
    
            </div>
    
            <div class="column">
         <div class="card" >
        <img src="pictures/pp8.jpg" alt="Diamond bracelet" style="width:100%">
            <h1>Diamond </h1>
            <p class="price">$15000</p>
            <p>9ct White Gold 2.25ct Diamond Bracelet</p>
                
         </div>
         </div>
         </div>
 
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
    <br>
    <br>
    <div class=divii>
     <h1>  Enter Product</h1> 
        
    </div>
         <form method='post' action='insert.php'>
         <input type='text' id='name' name='productname'  placeholder='Enter product name' required />
            <br>
         <input type='text' id='brand' name='brandname'  placeholder='Enter brand name' required/>
             <br>
         <input type='number' min="1" step="1" id='quantity' name='quantity' placeholder='Quantity'required/><br>
         <button>Save Product</button>
    </form>
    
    <style>
        
        input[type=text],select {
             width: 40%;
            padding: 12px 20px;
            margin: 4px 15px;
            border-radius: 4px;
            background-color:gainsboro;
            border: none;
            font size: 15px;
            margin-left: 300px;
            
        }
        
     input[type=number], select {
            width: 40%;
            padding: 12px 20px;
            margin: 4px 15px;
            border-radius: 4px;
            background-color:gainsboro;
            border: none;
            font size: 15px;
            margin-left: 300px;
            
        }
        
    button {
  background-color: rgb(197, 52, 52);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin: 4px 15px;
           margin-left: 705px;
}
        
        .divii{
            margin-left: 450px;
        }
        
        .opsionett{
            width: 40%;
            padding: 12px 20px;
            margin: 4px 15px;
            border-radius: 4px;
            border: none;
            font size: 15px;
            margin-left: 300px;
        }
        
        .fundii{
             margin-left: 280px;
        }
</style>

       
    
          
          <p id="result"></p> 


           <script>
          $("form").submit(function(e){
              e.preventDefault();
              $.post(
                'insert.php',
                {
                  productname: $("#name").val(),
                  brandname:$("#brand").val(),
                  quantity:$("#quantity").val()
                },
                function(result){
                  if(result == "success"){
                     $("#result").html(" Values inserted successfully");
                  }else{
                      $("#result").html(" Error occured ");
                    


                  }
                }


              );
          });
          </script> 
<br>
<br>
<br>
<div class="fundii">
        <h3><b>  Select a brand from the list below and see the information listed here.</b></h3>
    </div>
<div class="opsionett">
<form>
<select name="brands" onchange="showBrands(this.value)">
<option  value="">Select a brand:</option>
<option value="1">Swarowski</option>
<option value="2">Oliver Weber</option>
<option value="3">Feramox</option>
</select>
</form>
    </div>
    
    <div id="txtHint"></div>
    

<br><br>


<?php include ('footer.php'); ?>

     </html>




