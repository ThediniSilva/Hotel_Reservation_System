<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./Editprofile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body { background-image: url('./Image/ed.jpg');}
    </style>
</head>
<body>
    <!-- Navigation -->
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
</nav>
   \

    <h1>Edit Profile</h1>

    <form action="editsub.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="pwd" required>

        <input type="submit" value="Submit">
    </form>
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
