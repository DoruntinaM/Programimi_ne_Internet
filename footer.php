<h3 class="footer">&#169;2019 Miami University. All rights reserved.</h3>
      
          
      <script>
          window.onscroll = function() {myFunction()};
          
          var navbar = document.getElementById("header");
          var sticky = navbar.offsetTop;
          
          function myFunction() {
            if (window.pageYOffset >= sticky) {
              navbar.classList.add("sticky")
            } else {
              navbar.classList.remove("sticky");
            }
          }
          // new
        function Max(x) {
          // var x = 100; 
          // document.getElementById("maxx").innerHTML = x.MAX_VALUE;
          this.x = x;
        }
        var nrmaks = new Max(Number.MAX_VALUE)

        document.getElementById("numrimax").innerHTML = nrmaks.x.toExponential();
        </script>
          
</body>
</html>