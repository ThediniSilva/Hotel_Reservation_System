<!DOCTYPE html>
<html lan = "en">
    <head>
        <title>
            Terms and Conditions
        </title>

        <link rel="stylesheet" href="Style.css">
        
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
    
        <h1 class = "heading1">Terms and Conditions</h1>
       
        <div class = "middle">

            <div class = "one">
                <br><br><br>
                <input type = "checkbox" id = "accept" name = "accept" >
                <label for = "accept"> Accepting Terms</label>
                <br><br><br>
                <input type = "checkbox" id = "inquiry" name = "inquiry">
                <label for = "inquiry" >Inquiries of Terms</label>
                <br><br><br>
                <input type = "checkbox" id = "generate" name = "generate">
                <label for = "generate">Generate Large Terms</label>
                <br><br><br>

            </div>


            <div class = "two">
                
                    <p>To reserve a room for a special event,the guest must provide valid credit card information, which will be charged upon booking and subject to availability and are not confirmed until a confirmation email is sent by the hotel.</p>
                     <br>
                     <p>The guest agrees to comply with all hotel policies and procedures.</p>
                     <br>
                     <p>The hotel will do its best to accommodate any special requests, such as room loction or amenities.</p>
                     <br>
                     <p>Any cancellation or modification must be made at least 48 hours prior to the sheduled arrival date to avoid a ceancellation fee.</p>
                     <br>
                     <p>If the reservation is cancelled within 48 hours of the sheduled arrival date, the guest will be charged for the first night's stay.</p>
                     <br>
                     <p>If the guest does not show up for the reservation, the guest will be charged for the entire reservation.</p>
               
                    <div  class = "container"> 

                        <input type = "submit"  value = "DISAGREE"  onclick= "alert('Your login is failed.')"   class = largeB>                              
                        <input type = "submit" value ="I AGREE" onclick ="alert('Thanks for accepting')" class = "largeB">
                        
                    </div>
            </div> 

        </div>
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
