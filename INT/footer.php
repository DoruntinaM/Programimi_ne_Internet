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
            
            <div>
      
                   <form action="mail_handler.php" method="post" name="form" >
                   <label for="name">Name</label><br>
                   <input type ="text" name="name" placeholder="Enter your name" required><br>
                   <label for="email">Email</label><br>
                   <input type ="text" name="email" placeholder="Enter your email" required><br>
                   <label for="phone">Phone</label><br>
                   <input type ="text" name="phone" placeholder="Enter your phone" required><br>
                   <label for="message" >Message </label><br>
                   <textarea name="msg" placeholder="Enter your message here..." required></textarea><br>

                 
                   <input type ="submit" name="submit" value="Send" class="button"  onclick="myFunction()">
                  
                   </form>

                   
 
          </div>
        </div>
            </div>
        </body>
        
        </footer>