<!DOCTYPE html>
<html>

    <?php include ('header.php'); ?>
    
    
<body>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            mark {
                background-color:red;
            
            }
        </style>
</head>
<div class="bottom">
    <div>
        <table border="0">
            <tr>
                <td width="700px">
                    <br><br>

                <font color="black" size="6px"> CONTACT US </font> <br> <br>

                <h2>Luxury Jewelry</h2>
                
                <br>
                <br>
                <address>
                Adress: Pension Wedding
                <br>
                Visit us at : Schulstraße 40,13347 Berlin,Germany
                <br>
                <br>
                
                    
                    <?php
                 $number = array("Mobile"=>"045 888 999", "Fix"=>"038 145 698", "International"=>"+164 987 0258");
                 echo "Our mobile number : " . $number['Mobile'] . " "; 
                 echo "<br>";
                 echo "Our fix number : " . $number['Fix'] . " "; 
                 echo "<br>";
                 echo "Our international number : " . $number['International'] . " ";
                    ?>
                
                <br>
                <br>
                
                Email : <a href="mailto:luxury.jewelry@luxjewelry.com">luxury.jewelry@luxjewelry.com</a>

                <br>
                <br>
                </address>


                <script>
                        function clickCounter() {
                          if (typeof(Storage) !== "undefined") {
                            if (localStorage.clickcount) {
                              localStorage.clickcount = Number(localStorage.clickcount)+1;
                            } else {
                              localStorage.clickcount = 1;
                            }
                            document.getElementById("result").innerHTML = "You have liked our website " + localStorage.clickcount + " time(s).";
                          } else {
                            document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                          }
                        }
                        </script>
        
        <p><button onclick="clickCounter()" type="button">Like our Website!</button></p>
        <div id="result"></div>
    
<br>
<br>
<br>
</td>
                
                
                <td style="padding-left:20 px;"> </td>
            </tr>
        
            
        </table>
    </div>
</div>



 
</body>
<script type="text/javascript">
    var currentTime = new Date().getHours();
    if (7 <= currentTime && currentTime < 20) {
        if (document.body) {
            document.body.background = "pictures/day.jpg";
        }
    }
    else {
        if (document.body) {
            document.body.background = "pictures/night.jpg";
        }
    }
    
    </script>

<?php include ('footer.php'); ?>
    
     </html>

