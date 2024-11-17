<?php
// Assuming you have established a database connection
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "customer_in";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $inquiry = $_POST["inquiry"];

    // Insert the data into the database
    $sql = "INSERT INTO inquery_hotel (name, email, inquery) VALUES ('$name', '$email', '$inquiry')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <link rel="stylesheet" href="Style2.css">
  <style>
   body{
    background-color: antiquewhite;
   }
  </style>
</head>
<body>
  

       <nav>
              <!-- Logo -->
              <a href="#" class="logo">
                  <img src="logo.jpg"width="50px"height="70px" alt="Logo">
              </a>
              <ul class="menu">
                  <li><a href="#">HOME</a></li>
                  <li><a href="#">ABOUT US</a></li>
                  <li><a href="#">GALLARY</a></li>
                  <li><a href="#">EVENTS</a></li>           
                  <li><a href="#">CONTACT US</a></li>
                  <li><a href="#">FAQ</a></li>
              </ul>
              
              <div class="two-section">
                  <button style="background-color:rgba(176, 164, 164, 0.781);color: rgb(5, 1, 9);width: 100px;height: 40px;border: #0f0d0f;padding: 10px;cursor: pointer;font-size:medium;font-style:inherit;border-radius: 7px;">SignUp</button>
              </div>
              <div class="three-section">
                  <button style="background-color:rgba(176, 164, 164, 0.781);color: rgb(5, 1, 9);width: 100px;height: 40px;border: #0f0d0f;padding: 10px;cursor: pointer;font-size:medium;font-style:inherit;border-radius: 7px;">LogIn</button>
              </div>
              
                  <img src="userprofile.jpg" width="70">
              </nav>
              
  <h1 class="heading2">Contact us</h1>
  <div class="container">
    <div class="section">
      <!-- Content for the first section -->
      <p>You can celebrate your special events well planarly with us. Contact us and plan your special events.</p>
      <table >
        <tr>
          <td width="400px">
            <a href="">Meet your event planner</a>
          </td>
          <td width="400px">
            <fieldset>
              <legend>View previews</legend>
              <textarea id="previewes"></textarea>
            </fieldset>
          </td>
          <td>
              <center>
            <img src="Image/De luex.png" style="width:25%;height:25%;" >
       </center>  
       </td>
        </tr>
        <tr>
          <td>
              <center>
            <p>Search your hotels and resorts by</p>
            <select name="dropdown">
              <option value="1">Hotel DeLuxe</option>
              <option value="2">Lodge DeLuxe</option>
              <option value="3">Resort of Luxe</option>
            </select>
            </center>
          </td>
          <td>
            <p>Search by location</p>
            <select name="dropdown">
              <option value="a">Colombo 7</option>
              <option value="b">Kaluthara</option>
              <option value="c">Kandy</option>
            </select>
          </td>
          <td>
            <p>Search by cost</p>
            <select name="dropdown">
              <option value="A">above 3 lakh</option>
              <option value="B">below 3 lakh</option>
            </select>
          </td>
        </tr>
      </table>
    </div>
    <div class="section section-small">
      <!-- Content for the second section -->
      <form action="save_data.php" method="post">
      <Input type="button" id="inquiries" value="For inquiries">
      <p>Name</p>
      <textarea id="name" name="name"></textarea>
      <p>Email</p>
      <textarea id="email" name="email"></textarea>
      <p>Type your inquiry</p>
      <textarea id="inquiry" name="inquiry"></textarea>
      <div class="container">
        <input type="submit" value="Submit" onclick="alert('Successfully submitted')" class="largeC">
      </form>
       </div>
    </div>
  </div>
  <div class="container">
       <div class="section">
              <table >
     <tr>
<td width="400px">
 call us +94112457896
 <img src="images/call image.png" style="width:50px;height:25%;" >
</center>  
 </td>
<td>
       Visit us on
       <img src="Image/facebook image.png" style="width:50px;height:25%;" >
</td>
<td>
  Message us on
       <img src="Image/message image.png" style="width:50px;height:25%;" >
       </td>
  </div>
  </div>
  </body></tr></table>
  <!--============================
            FOOTER
================================-->
<footer class="footer">
  <div class="footer-content">
    <p class="copyright">
      &copy; 2023 Your Company. All rights reserved.
    </p>
    <div class="footer-links">
      <a href="#" >Feedback</a>
      <a href="#">Terms and condition</a>
      <a href="#">Privacy and Policy</a>
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