
<!DOCTYPE html>
<html>
<head>
  <title>FAQ Page</title>
  <link rel="stylesheet" type="text/css" href="faq.css">
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
<h1>FAQ</h1>
<h4><i>Do not worry! We have got you covered</i><h4>
<div class="search-container">
    <input type="text" id="search-input" placeholder="&#128269">
    <button type="submit" id="search-button">Search</button>
</div>
  
 <br>
<div class="faq-container">
    <div class="faq-item">
      <div class="faq-question">Q : How do I make a hotel reservation?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : You can make a hotel reservation by visiting our website, calling our reservation hotline, or using our mobile app.</div><br>
    </div>
    <div class="faq-item">
      <div class="faq-question">Q : What information do I need to provide when making a reservation?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : When making a reservation, you will need to provide your personal and event information such as full name, contact information, 
	                              desired date,venue and time, number of guests, and any special requests or preferences.</div><br>
    </div>
    <div class="faq-item">
      <div class="faq-question">Q : Can I make a reservation without a credit card?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : Yes, we offer alternative payment options</div><br>
    </div>
	<div class="faq-item">
      <div class="faq-question">Q : Can I cancel or modify my reservation?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : Yes, you can usually cancel or modify your reservation.Please refer to the confirmation email or contact our customer service for assistance.</div><br>
    </div>
	<div class="faq-item">
      <div class="faq-question">Q : Are there any additional fees or taxes?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : Additional fees and taxes, such as resort fees, city taxes, or service charges, may apply. </div><br>
	</div>
	 <div class="faq-item">
      <div class="faq-question">Q : How far in advance should I make a reservation for a special event?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : It is recommended to make a reservation well in advance for special events, as availability may be limited during peak periods.
	                              We suggest booking as soon as you have the event date and details confirmed.</div><br>
    </div>
    <div class="faq-item">
      <div class="faq-question">Q : Can I request additional event-related services or amenities?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : We strive to accommodate special requests related to the event. 
	                              This may include services like early check-in, late check-out, event transportation, or theme decorations. </div><br>
    </div>
    <div class="faq-item">
      <div class="faq-question">Q : Is there on-site parking available during the event?<span class="arrow">&#9660;</span></div>
      <div class="faq-answer">A : Please inquire about on-site parking availability, any associated fees, 
	                              or alternative parking options in the vicinity of the event venue.</div><br>
    </div>
	
    </div>
	
  </div>
  
  <script src="faq.js"></script>
  
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