<!DOCTYPE html>
<html>
<head>
  <title>conferences</title>
  <link rel = "stylesheet" type = "text/css" href="conferences.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
</nav>

<h1>CONFERENCES</h1>
<div class="image-container">
    <img src="Image/conf1.jpg" alt="Image 1">
	<br>
    <img src="Image/conf2.jpg" alt="Image 2">
  </div>
  <br>
  
<div class="conference-paragraph">
    <p>At our hotel, we offer exceptional conference facilities to cater to your professional needs. We understand the importance of hosting successful conferences and provide a conducive environment for productive meetings, seminars, and workshops.</p>
    <p>With our state-of-the-art conference rooms, cutting-edge audiovisual technology, and dedicated staff, we ensure a seamless and efficient event execution. Our versatile spaces can accommodate small business meetings as well as large-scale conferences, making us the perfect choice for any corporate event.</p>
    <p>From customized seating arrangements to comprehensive catering services, we pay attention to every detail to create a comfortable and productive atmosphere for your attendees. Our team of experienced professionals is committed to delivering excellence in service, allowing you to focus on your conference agenda.</p>
    <p>Experience our unparalleled hospitality and world-class amenities for your next conference. We look forward to assisting you in hosting a successful and memorable event.</p>
  </div>
 
  <div class="container">
    <div class="left-section">
      <h2>Facilities</h2>
      <ul class="custom-bullets">
        <li>Spacious conference halls with flexible seating options.</li>
        <li>Advanced audiovisual equipment and technology.</li>
        <li>Dedicated event planning and coordination.</li>
        <li>High-speed internet connectivity.</li>
        <li>Comfortable seating and workstations.</li>
        <li>Refreshments and catering services.</li>
        <li>On-site technical support.</li>
      </ul>
    </div>
    <div class="right-section">
      <h2>Packages</h2>
      <ul>
        <li>Silver Package:
          <ul class="custom-bullets">
            <li>Full-day conference room rental</li>
            <li>Basic audiovisual setup</li>
            <li>Coffee break and refreshments</li>
            <li>Event coordination</li>
          </ul>
        </li>
        <li>Gold Package:
          <ul class="custom-bullets">
            <li>Full-day conference room rental</li>
            <li>Premium audiovisual setup</li>
            <li>Lunch and coffee breaks</li>
            <li>On-site technical support</li>
            <li>Customized branding options</li>
          </ul>
        </li>
        <li>Platinum Package:
          <ul class="custom-bullets">
            <li>Multiple-day conference room rental</li>
            <li>Advanced audiovisual setup</li>
            <li>Full-service catering</li>
            <li>Dedicated event coordinator</li>
            <li>Networking reception</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <div class="button-container">
    <a href="./Indoor.php" class="button">Indoor</a>
    <a href="./outdoor.php" class="button">Outdoor</a>
  </div>
  <br><br>
  
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