<!DOCTYPE html>

<html manifest="demo_html.appcache">

    <?php include ('header.php'); ?>
                        

<body>

        <head>
                <link rel="stylesheet" href="nenfaqe1b.css">
                      
           
                </head>
   

    
    <br><div style=text-align:center><h1>THE PRECIOUS GEMSTONE RUBY </h1> 
<img src="pictures/rubin1.jpg" alt="Rubin Stone" width="310" height="250"  ></div><br><br>
Ruby is distinguished for its bright red color, being the most famed and fabled red gemstone.
Beside for its bright color, it is a most desirable gem due to its hardness, durability, luster,
and rarity.Transparent rubies of large sizes are even rarer than Diamonds. Ruby is the red variety of
the mineral Corundum.Sapphire, the other gem variety of Corundum, encompasses all colors of 
Corundum aside from red. In essence, Ruby is a red Sapphire,since Ruby and Sapphire are
identical in all properties except for color. However, because of the special allure and historical
significance,Ruby has always been classified as an individual gemstone, and is never identified
as a form of Sapphire (though some purplish-red colors may straddle the line of being classified 
as either Ruby or Sapphire).  <br><br>           

<table id="tablerubin">
 
        <tr>
          <td>Chemical formula</td>
          <td>Al2O3</td>
        </tr>
        <tr>
          <td>Color</td>
          <td>Red</td>
        </tr>
        <tr>
          <td>Hardness</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Crystal System</td>
          <td>Hexagonal</td>
        </tr>
        <tr>
          <td>Refractive index</td>
          <td>1.76-1.77</td>
        </tr>
        <tr>
          <td>Sg</td>
          <td>3.9-4.1</td>
        </tr>
        <tr>
          <td>Transparency</td>
          <td>Transparent to opaque</td>
        </tr>
        <tr>
          <td>Double Refraction</td>
          <td>.0008</td>
        </tr>
        <tr>
          <td>Luster</td>
          <td>Vitreous to adamantine</td>
        </tr>
         <tr>
          <td>Cleavage</td>
          <td>None, but may exhibit parting</td>
        </tr>
         <tr>
          <td>Mineral Class</td>
          <td>Corundum</td>
        </tr>
      </table>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="column2" style="background-color:#dddddd;;">
       <h3>The quality of a ruby</h3>
        <p> The quality of a ruby is determined by its color, cut,and clarity, which, along with carat weight, affect its value. 
            The brightest and most valuable shade of red called blood-red or pigeon blood,commands a large premium over other rubies of similar quality. 
            After color follows clarity: similar to diamonds, a clear stone will command a premium, but a ruby without any needle-like rutile inclusions may indicate that the stone has been treated.
            Ruby is the traditional birthstone for July and is usually more pink than garnet,although some rhodolite garnets have a similar pinkish hue to most rubies. 
            The world's most valuable ruby is the Sunrise Ruby</p>        
      </div>
      <br>
      <div class="column2" style="background-color:#dddddd;">
          <h3>The finest ruby</h3>
             <p1>Color is the most significant factor affecting a ruby’s value. 
                The finest ruby has a pure, vibrant red to slightly purplish red color. As the color
                becomes too orangy or more purplish, the ruby moves down the quality scale.
                Pink, orange, and purple are the normal secondary hues in ruby. 
                Of the three, purple is preferred because it reinforces the red, making it 
                appear richer. Purple also occupies a position on the color
                 wheel halfway between red and blue.When a purplish-red ruby is set in yellow,
                the yellow neutralizes its complement blue,leaving the stone appearing to be pure
                red in the setting </p>

          </div>
          <br>
<div class="column2" style="background-color:#dddddd;">
              <h3>Why would you use ruby?</h3>
              <p>When combined with Zincite, Ruby Gemstone will encourage your passion and zest for life.
                   It will also increase your motivation when it comes to setting realistic goals and achieving them.
         The energies of Ruby Gemstone will balance your heart and instill confidence in you. It will remind you to 
         love yourself as much as you love others.
         Its energies will bring your life prosperity and protection, and it will help you stay healthy, vibrant, and beautiful.
       With its rich and deep red color, Ruby Gemstone has the power to increase your life force. It will warm up your energies
       , restore your balance, and strengthen your character.
       <br>
    
                  <div>

<br>
                        <p> Click the button to get your coordinates.</p>

                        <button onclick="getLocation()">Try It</button>
                        
                        <p id="demo"></p>
                        
                        <script>
                        var x = document.getElementById("demo");
                        
                        function getLocation() {
                          if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(showPosition, showError);
                          } else { 
                            x.innerHTML = "Geolocation is not supported by this browser.";
                          }
                        }
                        
                        function showPosition(position) {
                          x.innerHTML = "Latitude: " + position.coords.latitude + 
                          "<br>Longitude: " + position.coords.longitude;
                        }
                        
                        function showError(error) {
                          switch(error.code) {
                            case error.PERMISSION_DENIED:
                              x.innerHTML = "User denied the request for Geolocation."
                              break;
                            case error.POSITION_UNAVAILABLE:
                              x.innerHTML = "Location information is unavailable."
                              break;
                            case error.TIMEOUT:
                              x.innerHTML = "The request to get user location timed out."
                              break;
                            case error.UNKNOWN_ERROR:
                              x.innerHTML = "An unknown error occurred."
                              break;
                          }
                        }
                        </script>
                  </div>  
                    <br>
    <br>
          </div>
    </div>
    </body>
    <?php include ('footer.php'); ?>
    
 </html>