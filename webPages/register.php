<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width= device-width, initial-scale = 1.0" />
    <title>News Box</title>
    <link
      rel="shortcut icon"
      href="https://cdn.glitch.com/5ee84088-d31b-4f20-89d8-592128411228%2Ffavicon-32x32%5B1%5D.png?v=1602708884887"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.cs"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <link rel="stylesheet" href="register.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="register.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
  </head>
  <body>
    <!-- This is NavBar -->

    <nav class="navbar">
      <div class="inner-width">
        <a href="#" class="logo"></a>
        <button class="menu-toggler">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- Where all the nav bar will list -->
        <div class="navbar-menu">
          <a href="#"> Home</a>
          <a href="https://news-box-application.glitch.me/login.html"> Login </a>
          <a href="https://news-box-application.glitch.me/register.html"> Register</a>
          <a href="#"> Forum</a>
        </div>
      </div>
    </nav>

    <!-- Home -->
    <section id="home">
      <div class="inner-width">
        <div class="content">
          <h1></h1>
        </div>
      </div>
    </section>

    <section id="register">
      <div class="registerForm">
        <form>
		
          <input type="hidden" name="action" value="registerUser"> 
		
		
          <div class="inputBox">
            <br /><label style="color: lightskyblue;"> Username </label>
            <label style="color:red;">* </label>
            <input
              type="text"
              name="userid"
              required="required"
              placeholder="Enter Your Name"
            />
          </div>
          <div class="inputBox">
            <br /><label style="color: lightskyblue;"> Password </label>
            <label style="color:red;">* &nbsp;</label>
            <input
              type="password"
              name="userpw"
              required="required"
              placeholder="Enter Your Password"
            />
          </div>
          <div class="checkBox">
             <br>
             <br><input type="checkbox" id="ref1" name="ref1" value="Bss">
             <label for="userRef1"> Business</label><br>
             <br><input type="checkbox" id="ref2" name="ref2" value="Ettm">
             <label for="userRef2"> Entertainment </label><br>
             <br><input type="checkbox" id="ref3" name="ref3" value="Hth">
             <label for="userRef3"> Health</label><br>
             <br><input type="checkbox" id="ref4" name="ref4" value="Sci">
             <label for="userRef4"> Science</label><br>
             <br><input type="checkbox" id="ref5" name="ref5" value="Sprt">
             <label for="userRef5"> Sports </label><br>
             <br><input type="checkbox" id="ref6" name="ref6" value="Tech">
             <label for="userRef6"> Technology</label><br><br>
          </div>
          
          <br /><input
            type="submit"
            id="loginSubmit"
            name=""
            value="REGISTER"
            style="color: white;"
          />
        </form>
      </div>
    </section>

    <!-- Footer--->

    <footer>
      <div class="inner-width">
        <div class="policy">
          <a class="bt" href="#">About Us</a>
          <a class="bt" href="https://news-box-application.glitch.me/login.html">Login</a>
          <a class="bt" href="https://news-box-application.glitch.me/register.html">Register</a>
        </div>

        <div class="copyright">&copy; | 2020, <a href="#">News Box </a></div>

        <div class="sm">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </footer>
    <!--Go Back Top-->
    <button class="goTop fas fa-arrow-up"></button>
  </body>
</html>
