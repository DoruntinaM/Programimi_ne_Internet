<!DOCTYPE html>
<html>

  <?php include ('header.php'); ?>
   

    <body>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="aboutus.css" type="text/css" rel="stylesheet">
    </head>
    <div class="middle">
            <div style="background-image:url(pictures/guret.jpg);">
            <p>
                <br> <br>
                        Luxury Jewellery  <br>
                <font size="5px"> We Care About Your Style </font>
            </p> 
            </div>
        </div>
        
        <div class="bottom">
            <div>
                <table border="0">
                    <tr>
                        <td width="1200px">
                           <font color="#000" size="5px">  
                           <?php 
                         $output=substr("Our History-A Short Story About Us!",-23);
                         echo $output;
                           ?>
                           </font> <br> <br> 
    <?php
    $paragraph='Luxury Jewellery is a company that is well known and trusted throughout the Europe and USA as a producer of exclusive high-quality luxury jewelleries. The company founded by the current CEO,Alex Ferguson, at the young age of 16. He found a passion for diamond and gold jewellery and created a jewellery company renowned globally for the flawless craftsmanship and the impeccable beauty of its creations. he took his infatuation of rare gems and translated it into the magnificent and unique pieces that can only be found in Luxury Jewellery products today. With products ranging from extravagant and opulent designs using exceptional diamonds and precious stones down to effortless and stylish jewellery designed for every day wear, Luxury Jewellery collections are extensive and unsurpressed. As a two generation family business, family values are the pillars in the running of day-to-day operations, ensuring trust, honesty and assertion of superiority to each and every customer. ';
    $a='Jewellery';
    $b='Gems';
    echo str_replace($a,$b,$paragraph);
    ?>
     "When it comes to buying jewellery, customers need to feel that they trust us in helping them make the right choice and here at Luxury Jewellery we make sure that they can,"says Lionel Messi. <br><br>
                            
    We have different choices from jewelleries like :                      
    <ol>
        <li>Beryl</li>
            <ul>
                <li>Aquamarine</li>
                <li>Emerald</li>
                <li>Morganite</li>
                <li>Red Beryl</li>
            </ul>
        <li>Corundum</li>
            <ul>
                <li>Ruby</li>
            </ul>
        
        <li>Saphire</li>
              <ul>
                  <li>Color changing saphire</li>
                  <li>Star saphire</li>
              </ul>
        <li>Diamond</li>
              <ul>
                  <li>Nano-Polycristalline Diamond</li>
                  </ul>
        </ol>
    <br>
    <br>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("ph").hide();
      });
      $("#show").click(function(){
        $("ph").show();
      });
        $("pevent").click(function(){
        $(this).hide();
      });
        $("button").click(function(){
        $("#div1").fadeToggle();
        $("#div2").fadeToggle("slow");
        $("#div3").fadeToggle(3000);
      });
        $("#flip").click(function(){
        $("#panel").slideToggle("slow");
      });
        
    });
    </script>
    <body>
    
        <font size="5px" font color= "black" >Jewellery History </font>
    <br>
        <ph>Jewellery (British English) or jewelry (American English)consists of small decorative items worn for personal adornment, such as brooches, rings, necklaces, earrings, pendants, bracelets, and cufflinks. Jewellery may be attached to the body or the clothes. From a western perspective, the term is restricted to durable ornaments, excluding flowers for example. For many centuries metal, often combined with gemstones, has been the normal material for jewellery, but other materials such as shells and other plant materials may be used. It is one of the oldest type of archaeological artefact – with 100,000-year-old <pevent><font color = black >[1]100,000 year are 1000 ceturies.</font></pevent> beads made from Nassarius shells thought to be the oldest known jewellery.The basic forms of jewellery vary between cultures but are often extremely long-lived; in European cultures the most common forms of jewellery listed above have persisted since ancient times, while other forms such as adornments for the nose or ankle, important in other cultures, are much less common..</ph>
    <br>
    
    <button id="hide">Hide</button>
    <button id="show">Show details</button>
        <br>
        <br>
        <?php
    $text='CLICK';
    $text_length=strlen($text);
    for($i=0;$i<$text_length;$i++){
        echo substr($text,$i,1),'<br/>';
    }
    ?>
    <p>Our first three jewelleries discovered were in three diffent colors :</p>
    
    <button>Click to fade in/out jewelleries colors </button><br><br>


    
    <div id="div1" style="width:100px;height:100px;background-color:darkseagreen; "></div>
    <br>
    <div id="div2" style="width:100px;height:100px;background-color:palevioletred;"></div>
    <br>
    <div id="div3" style="width:100px;height:100px;background-color:goldenrod;"> </div>
        <br>
        <br>
        <style> 
    #panel, #flip {
      padding: 5px;
      text-align: center;
      background-color:paleturquoise;
      border: solid 1px #c3c3c3;
    }
    
    #panel {
      padding: 50px;
      display: none;
    }
    </style>
        <div id="flip">Click to slide the panel down or up to see the name of the first jewellery discovered 100,000 years ago.</div>
    <div id="panel">Zircon!<br>
        <img src="pictures/zircon.jpg" alt="zircon" width="460" height="345">
        </div>
        <br>
        <audio controls>
            <source src="pictures/thankyou.mp3" type="audio/mp3">  
              </audio>
        <br>
        <br>
        <br>
        
        <video width="1200" height="600" controls>
        <source src="pictures/Most%20Expensive%20Pieces%20Of%20Jewelry%20in%20The%20World.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    <br>
        <br>
        <audio controls>
            <source src="pictures/welcome.mp3" type="audio/mp3">
        </audio>
        <br>
        <br>
        <br>
        <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
    <input type="range" id="a" value="50">100
    +<input type="number" id="b" value="50">
    =<output name="x" for="a b"></output>
    </form>
    <br>
    
                            
                            </body>
                        </td>
          <td> </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        
        
    </body>
    
   <?php include ('footer.php'); ?>
    
         </html>