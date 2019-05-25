<!DOCTYPE html>
<html>
<head>

    <?php include ('header.php'); ?>
    <br>
    <br>
    <h3>If you want to know which brands you can find at Luxury Jewelry, please start typing a name in the input field below:</h3>



<p>Name of Brand: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

    
</head>
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
                <font color="black" size="5px"> BEFORE YOU LEAVE READ THESE FUNNY SENTENCES </font> <br> <br>
                <hr>
                <br>
                    
                <?php

 $text = " <h2><pre>    I was _VERB_ing in the _PLACE_ when I found a _NOUN_.
    Then I had to go to the _PLACE_.<pre></h2>";

$verbs = explode("\n", file_get_contents("words.verbs.txt"));
$places = explode("\n", file_get_contents("words.places.txt"));
$nouns = explode("\n", file_get_contents("words.nouns.txt"));

while (preg_match("/(_VERB_)|(_PLACE_)|(_NOUN_)/", $text, $matches)) {
    switch ($matches[0]) {
        case '_VERB_' :
            shuffle($verbs);
            $text = preg_replace('/' . $matches[0] . '/', current($verbs), $text, 1);
            break;
        case '_PLACE_' :
            shuffle($places);
            $text = preg_replace('/' . $matches[0] . '/', current($places), $text, 1);
            break;
        case '_NOUN_' :
            shuffle($nouns);
            $text = preg_replace('/' . $matches[0] . '/', current($nouns), $text, 1);
            break;
    }
}

echo $text . "\n";

?>
            <br>
            <hr>





            <br>
            <br>
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
        </table>
    </div>
    </div>
    </body>
                
                
                <td style="padding-left:20 px;"> </td>
        <br>
    


<?php include ('footer.php'); ?>
    
     </html>

