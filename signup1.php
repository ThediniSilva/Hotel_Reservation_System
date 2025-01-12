<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="signup1.css">  <!--css file connected-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="scricpt.js"></script><!--js file connected-->

	
</head>
<body>
<nav>
    <!-- Logo -->
    <a href="/" class="logo">
        <img src="Image/logo.jpg" width="50px" height="70px" alt="Logo">
    </a>
    <ul class="menu">
        <li><a href="./Home.php">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="./Gallery.php">GALLERY</a></li>
        <li class="event-section">
            <a href="#">EVENTS</a>
            <ul class="event-dropdown">
                <li><a href="./weddings.php">WEDDINGS</a></li>
                <li><a href="./conferences.php">CONFERENCES</a></li>
                <li><a href="#">OTHER</a></li>
            </ul>
        </li>
        <li><a href="./Contact us.php">CONTACT US</a></li>
        <li><a href="./FAQ.php">FAQ</a></li>
    </ul>

    <div class="two-section">
        <a href="./signup1.php" type="button" style="background-color:rgba(176, 164, 164, 0.781);color: rgb(5, 1, 9);width: 100px;height: 40px;border: #0f0d0f;padding: 10px;cursor: pointer;font-size:medium;font-style:inherit;border-radius: 7px;">SignUp</a>
    </div>

    <div class="three-section">
        <a href="./Login.php" style="background-color:rgba(176, 164, 164, 0.781);color: rgb(5, 1, 9);width: 100px;height: 40px;border: #0f0d0f;padding: 10px;cursor: pointer;font-size:medium;font-style:inherit;border-radius: 7px;">LogIn</a>
    </div>
    <a href="./Editprofile.php"><img src="Image/userprofile.jpg" width="70"></a>
</nav><!-- header -->
	<!--=====================================
    START OF THE FORM
=======================================-->
	<div class="container">
    <div class ="left-box">
    <h1><i>Signup</i></h1>
    <form action="process-signup1.php" method="post" id="signup" novalidate> <!-- PHP file connected -->
        <div>
            <label for="fname" class="text-medium">First Name</label>
            <input type="text" id="fname" name="fname">
        </div>
		<div>
            <label for="lname" class="text-medium">Last Name</label>
            <input type="text" id="lname" name="lname">
        </div>
        
        <div>
            <label for="email" class="text-medium">Email</label>
            <input type="email" id="email" name="email">
        </div>
		
		<div>
            <label for="username" class="text-medium">Username</label>
            <input type="text" id="username" name="username">
        </div>
        
        <div>
            <label for="password" class="text-medium">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        
        
        <button class="signup">Sign up</button>
    </form>
	</div>
	<!--=====================================
    END OF THE FORM
=======================================-->
	<!--=====================================
    START OF THE SOCIAL MEDIA LOGIN
=======================================-->

    <div class="right-box">
      <h1>Sign up using:</h1>
      <a href="#" class="google btn" onclick="openPopup('https://accounts.google.com/login', 'Google Login', 'Login using Google account')">
        <i class="fab fa-google"></i>Login with Google
      </a>
      <a href="#" class="twitter btn" onclick="openPopup('https://twitter.com/login', 'Twitter Login', 'Login using Twitter account')">
        <i class="fab fa-twitter"></i>Login with Twitter
      </a>
      <a href="#" class="facebook btn" onclick="openPopup('https://www.facebook.com/login', 'Facebook Login', 'Login using Facebook account')">
        <i class="fab fa-facebook"></i>Login with Facebook
      </a>
    </div>
	</div>

	  <!--=====================================
    END OF THE SOCIAL MEDIA LOGIN
=======================================-->
<!--============================
            FOOTER
================================-->
<footer class="footer">
  <div class="footer-content">
    <p class="copyright">
      &copy; 2023 Your Company. All rights reserved.
    </p>
    <div class="footer-links">
      <a href="./feedback.php" >Feedback</a>
      <a href="./Terms and conditions.php">Terms and condition</a>
      <a href="./privacy.php">Privacy and Policy</a>
    </div>
    <div class="social-icons">
    <i class="fab fa-facebook"></i>
    <i class="fab fa-twitter"></i>
	<i class="fab fa-google"></i>
	<i class="fab fa-linkedin"></i>
    </div>
  </div>
</footer>
<!--============================
           END FOOTER
================================-->
</body>
</html>