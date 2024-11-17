<!DOCTYPE html>
<html>
<head>
  <title>Reservation</title>
  <link rel = "stylesheet" type = "text/css" href="reservation.css">
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

<h1>Hotel Reservation Form</h1>
<div class="center">

<form class= "reservation-form" action = "submit-reservation.php" method= "POST">

<!--form fields--> 
<fieldset>
<h3>Personal Information</h3>
<hr>
<label for="name">Name:</label><br>
<div class="form-group">
<input type="text" id="fname" name="fname" placeholder="First" required>
</div>

<div class="form-group">
<input type="text" id="lname" name="lname" placeholder="Last" required>
</div/>
<br><br>

<label for="nic">NIC:</label><br>
<input type="text" id="nic" name="nic" required>
<br><br>

<label for="email">Email Address:</label><br>
<input type="email" id="email" name="email" required>
<br><br>

<label for="phoneNumber">Contact No:</label><br>
<input type="text" id="phoneNumber" name="phoneNumber" required>
<br>

<hr>
<h3>Event Information</h3>
<hr>

<label for="eventType">Type of the event:</label><br>
<select class="select" id="eventType" name="eventType">
		<option>Wedding</option>
		<option>Conference</option>
		<option>Other gathering or celebration</option>
		</select>
		<br><br>

<label for="venue">Venue:</label><br>
 <select class="select" id="venue" name="venue">
		<option>Hall 01</option>
		<option>Hall 02</option>
		<option>Hall 03</option>
		<option>Lakeside<option>
		<option>Garden</option>
		<option>Pool Area</option>
		</select>
		<br><br>
		
<label for="package">Package:</label><br>
 <select class="select" id="package" name="package">
		<option>Silver</option>
		<option>Gold</option>
		<option>Platinum</option>
		</select>
		<br><br>

<label for="date">Date:</label><br>
<input type="date" id="date" name="date" required>
<br><br>

<i>Reserve for multiple days (optional):</i><br><br>
<div class="form-group">
     <label for="startDate">Starting date:</label><br>
     <input type="date" id="startDate" name="startDate">
  </div>
  
<div class="form-group">
     <label for="numberOfDays">Number of days:</label><br>
     <input type="number" id="numberOfDays" name="numberOfDays">
  </div>
<br><br>

<input type="checkbox" id="flexibleDate" name="flexibleDate">
<label for="flexibleDate">This date is flexible</label>
<br><br>
	
<div class="form-group">
<label for="startTime">Start time:</label><br>
<select class="select" id="startTime" name="startTime" required>
		<option>08:00 AM</option>
		<option>09:00 AM</option>
		<option>10:00 AM</option>
		<option>11:00 AM</option>
		<option>12:00 PM</option>
		<option>01:00 PM</option>
		<option>02:00 PM</option>
		<option>03:00 PM</option>
		<option>04:00 PM</option>
		<option>05:00 PM</option>
		<option>06:00 PM</option>
		<option>07:00 PM</option>
		<option>08:00 PM</option>
	</select>
	</div>
	<br><br>

<div class="form-group">
<label for="endTime">End time:</label><br>
<select class="select" id="endTime" name="endTime" required>
		<option>10:00 AM</option>
		<option>11:00 AM</option>
		<option>12:00 PM</option>
		<option>01:00 PM</option>
		<option>02:00 PM</option>
		<option>03:00 PM</option>
		<option>04:00 PM</option>
		<option>05:00 PM</option>
		<option>06:00 PM</option>
		<option>07:00 PM</option>
		<option>08:00 PM</option>
		<option>09:00 PM</option>
		<option>10:00 PM</option>
		<option>11:00 PM</option>
		<option>12:00 AM</option>
		<option>01:00 AM</option>
		<option>02:00 AM</option>	
	</select>
	</div>
	<br><br>
 
<label for="guests">No. of Guests (including children):</label><br>
<input type="number" id="guests" name="guests" required>
<br><br>

<label>Do you want the assistance of our event planners?</label><br>
      <input type="radio" id="eventPlannerYes" name="eventPlanner" value="Yes">
      <label for="eventPlannerYes">Yes</label><br>
      <input type="radio" id="eventPlannerNo" name="eventPlanner" value="No">
      <label for="eventPlannerNo">No</label>
	  <br><br>

<label for="additionalRequests">Additional Requests:</label><br><br>
      <div class="form-container">
        <textarea id="additionalRequests" name="additionalRequests" rows="4" cols="50"></textarea>
        <br>
		
<input type="submit" value="Submit" name="reservation-submit">
</div>
</form>

<h5>By clicking submit you confirm that you agree to our terms and conditions, privacy policy</h5>

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