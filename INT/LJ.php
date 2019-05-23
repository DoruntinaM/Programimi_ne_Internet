<!DOCTYPE html>

<html manifest="demo_html.appcache">

<?php include ('header.php'); ?>

<body>
        <head>
        
                <style>
                    a1 {
                    text-decoration: none;
                    display: inline;
                    padding: 3px 9px;
                    float:right;
                }
                a1:
                hover {
                    background-color: rgb(202, 34, 34);
                    color: black;
                }
                .next {
                    background-color: rgb(202, 34, 34);
                    color: rgb(247, 241, 241);
                }
                .previous {
                    background-color: rgb(202, 34, 34);
                    color: rgb(248, 248, 248);
                }
                
                .round {
                    border-radius: 200%;
                }
                h1{
                    color:lightgrey;
                    font-style: italic;
                    text-align: center;
                }
                h2{
                    color:rgb(204, 198, 198);
                    font-style: normal;
                }
                hr { 
                  border: 0; 
                  height: 3px;
                  width:70%; 
                  background-image: -webkit-linear-gradient(left, #ffffff, #ddd1d1, #ffffff);
                  background-image: -moz-linear-gradient(left, #ffffff, #8c8b8b, #ffffff);
                  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
                  background-image: -o-linear-gradient(left, #f0f0f0, #dad0d0, #f0f0f0); 
                 
                }
                * {
                    box-sizing: border-box;
                }
                .column1 {
                    float: left;
                    width: 28%;
                    padding: 10px;
                    height: 250px; 
                    margin-left: 30px;
                }
                .row:after {
                    content: "   ";
                    display: table;
                    clear: both;
                    text-align: center
            
                }
                button
                {
                    background-color: rgb(202, 34, 34);
                    width:100;
                    height:100;
                    border:none;
                    border-radius: 13px;
                    color: rgb(255, 255, 255);
                    padding: 10px;
                    text-align: center;
                    text-decoration: none;
                    
                    font-size: 12px;
                    margin: 0px 0px;
                    cursor: pointer;
                    }
                .img
                {
                    width:250px;
                    height:430px;
                }    
                .column3 {
                                float: left;
                                width: 50%;
                                padding: 20px;
                                height: 350px; 
                            }
                            .row3:after {
                                content: "";
                                display: table;
                                clear: both;
                            }
                            
        a:link {
  color: red;
}
a:visited {
  color: green;
}
a:hover {
  color: hotpink;
}
a:active {
  color: blue;
        
        
}
        
                </style>
                
            </head>
        
        
        
            
                <body>
                    <br>
                    <br>
                
                <h1 ><a href="#j"><q>Gemstones have a beauty unlike anything else because<br>
                          they allow light inside and refract it</q></a></h1>
                          <br>
                <hr>
                <br>
                <div class="row" >
                        <div class="column1" >
                       <h2>Facts and curiosities about gems</h2>
                       <br>
                                  <p>To learn on how to maintain your jewelry and keep them in perfec condition,
                                      read the story of the rings and interesting facts about them.
                                  
                                  </p>
                                  <br>
                    <a href="Fakte me video.php" target="_parent"> <button>READ MORE &gt;</button></a>
                    </div>
                      
                      <div class="column1" >
                          <h2>10 Important Questions</h2>
                         <br>
                         <p>You are always confused when buying a jewellery.
                             Here are 10 questions to ask before buying one.
                             We are sure they will help you.
                          </p>
                          <br>
                          <a href="questions.php" target="_blank"><button>READ MORE &gt;</button></a>
                      
                        
                      </div>
                
                      <div class="column1">
                              <h2>10 reasons to love jewelry</h2>
                              <br>
                              <p> We know what you’re thinking: you 
                                  don’t need a reason to love jewelry. 
                                  Well, we have 10 reasons for you anyway! </p>
                      <br>
                      <a href="https://www.longsjewelers.com/blogs/news/10756605-10-reasons-to-love-jewelry" target="_blank"><button>READ MORE &gt;</button></a>
                      
                      </div>
                </div>
                <hr>
                <a1 href="#" class="previous round">&#8250;</a1>
                <a1 href="#" class="next round">&#8249;</a1>
                  
                  <br>
                  <br>
                <div class="row">
                    <div class="column1">
                    <img src="pictures/4..jpg" width>
                    </div>
                
                    <div class="column1">
                    <img src="pictures/2..jpg">
                    </div>
                
                    <div class="column1">
                    <img src="pictures/3..jpg" >
                    </div>
                
                  </div>
                    
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<br>
<br>
<br>
<br>
<br>

        
        <div class="row3">
            <br>
            <br>
<hr>
                            <div id="#j" class="column3">
            <p style="font-size:30px;">
                <br>
              The origin of our beautiful <abbr title="Luxury Jewelry">LJ</abbr> jewelry</p> 
              <br>
            
            
             <p> Our jewelry is made by hand crafted stones, that are presented further in the next 
                 column.<br> Have you ever wondered as you looked at a piece of gold jewelry and thought
                 just how <br> it was made, or from what is it made from?....To learn more about 
                 the precious <br>stones/gems that this jewelry that we sell is made from click on 
                 the right side,<br> where you can find the four main products we use for making 
                 the products that you love.
                 <?php
                 $number = 1;
                 $str = "products";
                 printf("There are %u million people only in Kosovo using our %s.<br>",$number,$str);

                 $likes='Home, About us, Rings, Earrings, Barcelets, Contact Us';
                 $likes=explode(',', $likes);

                 foreach($likes as $key=>$like) {
                     echo $like, ' at site ', $key, '<br>';
                 }
                 ?>
<br>

               
               
            </p>
                                
        
                              
        </div>
        <div class="column3" >                
            <table>    
            <td > <p style="font-size:30px;">Gemstones </p> 
                <br>   
                <pre>
<strong>To view Rubin Stone</strong>
<img src="pictures/rubin.jpg" alt="Rubini" width="55" height="55" align="left"> Rubin stone and its
 specifics
<a style="color:red;" href= "Rubin.php"> View profile </a>>
</pre>
                </td>
                <br>
                <td>
                    <br>
                    <br>
                    <br>
                <pre>
                    <br>
<strong>To view Emerald Stone</strong>
<img src="pictures/emerald-gemstone-500x500.jpg" alt="Emerald" width="80" height="80" align="left">Emerald stone and its
specifics
<a style="color:red;" href="Emerald.php">View profile </a>>
</pre>
                </td>
                <tr>
                        <td>
<pre>
<strong>To view Sapphire Stone</strong>
<img src="pictures/safiri.jpg" alt="Sapphire" width="70" height="70" align="left">Sapphire gem and its
specifics
<a style="color:red;" href="SAFIR.php">View profile </a>> </pre> </td> 
                        <td>

<pre><strong>To view Diamond Stone</strong>
<img src="pictures/diamanti.jpg" alt=Diamond width="80" height="60" align="left">Diamond gem and its
specifics
<a style="color:red;" href="diamond.php">View profile </a>></pre>
                </td> 
                </tr>
                       </table> 
        </div>
                    </div>
        
    </body>
    </body>
           
<?php include ('footer.php'); ?>
    
     </html>