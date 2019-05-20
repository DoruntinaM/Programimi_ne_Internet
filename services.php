

<?php
    include('header.php');
    require('Validation.php');

?>

<div class="leftcolumn">
        <div class="card">
          <h2 style="color:rgb(48, 4, 4);font-size:35px;text-align: center"> Academics </h2>
          <div class="style">  
          <ul>
            <li><a href="Miami University 2018-2019 Academic Calendar.html" style="color:black;text-decoration: none;font-style: bold;">Miami University 2018-2019 Academics </a> </li>
            <li><a href="Company.html" style="color:black;text-decoration: none;font-style: bold;">Farmer School of Business</a></li>
            <li><a href="Gallery.html"style="color:black;text-decoration: none;font-style: bold;">College of Creative Arts</a></li>
            <li><a href="Company.html"style="color:black;text-decoration: none;font-style: bold;">College of Education, Health and Society</a></li>
            <li><a href="Gallery.html"style="color:black;text-decoration: none;font-style: bold;">Sports,Fitnes,Aquatics and Club Sports</a></li>
          </ul>
          
        </div>
      </div>
    </div> 

       <!--2-->
        <div class="leftcolumn">
          <div class="card" style="height: 900px;">
            <h2 style="color:rgb(48, 4, 4);font-size:35px;text-align: center"> Living at Miami </h2>
            <a href="Gallery.html"><img src="images/88.jpg" width="100%" height="600px" title="White flower" alt="Living here"></a>
            <h3>Enjoy the convenience of living on campus again next year! Room selection for current Second Year and Older students is now open.
              <a href="https://en.wikipedia.org/wiki/Miami_University"target="_blank">Learn more!</a> </h3>
            <p><i>Welcome to Miami University Housing!  Through our partnership with the Office of Residence Life, we seek to ensure that your home away from home is safe,
                comfortable, and clean,and that it supports your education and personal growth. We have an array of housing options on campus to meet the diverse needs and
                 interests of our students. Miami requires first and second year students to live on campus, and also provides a limited number of spaces for third and fourth year
                  students each year.
               From our traditional corridor residence halls to apartment-style living, there is something for everyone.&diams;</i></p>
               <h2>If you want to see more photos click on this photo!&#8593;&#8593;</h2>

          </div>

          <div class="card" style="height:1040px;">
              <h2 style="color:rgb(48, 4, 4);font-size:35px;text-align: center"> Box office </h2>            
              <a href="Gallery.html"><img src="images/7.jpg" width="100%" height="600px" alt="box office"></a>          
               <p><b>The Miami University</b>
                 <i>Box Office serves as the professional ticketing services provider for the greater Miami University
                    community, providing full service ticketing for the Performing Arts Series, Department of Theatre, 
                    Department of Music ticketed events, Hamilton Artist Series, Middletown Cultural Arts Series, Lecture Series,
                     major concerts, and numerous student organizations. As a ticketing partner with the Miami University Athletic Ticket Office,
                      we are also able to provide tickets to certain Miami Redhawk athletic home games. The Box Office is pleased to offer ticketing services to 
                      local 
                      community organizations upon request. The Box Office partners with all promoting organizations to handle admission access
                   but does not perform booking or artist management duties.&diams;</i></p> 
                   <h2>If you want to see more photos click on this photo!&#8593;&#8593;</h2>
                   <h2>Youtube links:</h2>
                   <ol>
                    <li style="font-size:25px"><a href="https://www.youtube.com/watch?v=NddzV1Sb-4I" style="color:rgb(15, 15, 15)"target="_blank">Performing Arts Series </a> </li>
                    <li style="font-size:25px"><a href="https://www.youtube.com/watch?v=a2b4PEyBjIc" style="color:rgb(15, 15, 15)"target="_blank">Department of Music </a> </li>
                    <li style="font-size:25px"><a href="https://www.youtube.com/watch?v=nMcmjnVzdqs" style="color:rgb(15, 15, 15)"target="_blank">Department of Theatre </a> </li>
                    <li style="font-size:25px"><a href="https://www.youtube.com/watch?v=nA5oaPRe8Ro" style="color:rgb(15, 15, 15)">Regional Artist Series </a> </li>
                   </ol>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2 style="color:rgb(48, 4, 4); font-size:35px; text-align: center;">Dinning</h2>
            <video width="100%" height="500px" controls>
                <source src="images/videoenisi.mp4" type="video/mp4">
                
              </video>
            <p><i> <b>Miami University</b> Dining Services serves over 20,000 undergraduate and graduate students,
               staff and faculty on Oxford is the regional campuses. We are proud to have well over 12,000 meal plan holders and are committed 
              to providing them the highest level of quality and service.Knowing how to behave in company, especially when dining formally, 
              helps you keep from offending people and shows that you are making an effort to operate within the guidelines of polite society. 
              It also helps ensure that you come to the end of the meal with the right silverware to eat dessert, which is important.&diams;</i>
            <big><b>For places to eat click here &rArr;</b></big><a href="placetoeat.html" target="_blank" style="color:black"><b>PLACES TO EAT</b></a></p>
          </div>

          <div class="card" style="height: 700px;">
            <div class="mouse">

            <form method="POST" action='services.php'>
              <p><strong>Please fill these requirements!</strong></p>

              Full name:<br>
              <input type="text" name="full_name">

              
              <br>Email:<br>
              <input type="text" name="email" required>

              <h3>Do you have any sugestion?</h3>
              <textarea rows="4" cols="50" name="sugestion">  </textarea> <p>
               <h3>What do you think is important to study there?</h3>
              
                  <input type="checkbox" name="intelligent" value="in"> Intelligent<br>
                  <input type="checkbox" name="talent" value="tal"> Talent<br>
                  <input type="checkbox" name="hardwork" value="hard" checked> Hardwork<br><br>
                 
               
                
              <h3>Do you recomanded this University?</h3>
                  <input type="radio" name="recomended" value="yes" checked>Yes  
                  <input type="radio" name="recomended" value="no">No
              
                <br>
                
                <h3>For more information visit our FACEBOOK page</h3> 
             
                <span><button onclick="window.location.href = 'https://www.facebook.com/MiamiUniversity/';" target="_blank">FACEBOOK.com</button> or click 
                  <button type="button" onclick="window.location.href ='Contact.html';" >CONTACT </button>
              </span>
              <input type="submit" value="Submit">
              </form>
          </div>
          <!-- New -->
          <div class="mouse_djatht">
            <h2>Did you knew</h2>
            <h3>That max value in javascript is <p id="numrimax"></p> and we take that number as infinit</h3><br>
            <br>


            <?php
    $validation = new Validation();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $message = $validation->validate($_POST);
      if(!empty($message)) {
        echo '<h2 style="color:red">' . $message . '</h2>';
      } else {
        
      }
    }
    
?>
          </div>
        </div>
<?php
  
    include('footer.php');
?>