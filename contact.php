<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HETAUDA SCHOOL OF MANAGEMENT</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
  <div class="contact_container">
    <div class="headbar">
      <div class="logo">
        <a href="./index.html"><img src="./img/logo.png"></a>
      </div>
      <div class="login">
        <a href="./logIn_page.html" class="log_in">log in</a>
      </div>
    </div>
    <div class="navbar">
      <ul>
        <li> 
          <a href="homepage.php" class="nav_but">
            <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
            <span class="home-text"> HOME </span>
          </a>
        </li>
        <li><a href="./faculty.php" class="nav_but">FACULTY</a></li>
        <li><a href="./form.php" class="nav_but">ADMISSION</a></li>
        <li><a href="./news.php" class="nav_but">NEWS & EVENT</a></li>
        <li><a href="./attendenceF/attendance.php" class="nav_but">ATTENDANCE</a></li>
        <li><a href="./contact.php" class="nav_but active">CONTACT</a></li>
      </ul>
     </div>
      <div class="contact_info_container">
        <div class="contact_body">
          <div class="contact_info_body" >
            
            <h1>
              CONTACT US
            </h1>
            <p>
              Hetauda School of Management<br><br>
              Hetauda-4, Makwanpur<br><br>
              Phone no: 057524701, 057524711, 057525765<br><br>
              Email: HSM.123@gmail.com<br><br>
            </p>
          </div>
          <div class="contact_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.3983758430472!2d85.03256531505595!3d27.425692782909326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb499aa39949f3%3A0x681f942888f4990e!2sHetauda%20School%20Of%20Management%20%26%20Social%20Science!5e0!3m2!1sen!2snp!4v1646057270055!5m2!1sen!2snp" width="600px" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <!-- <img src="./img/clz_1.jpg"> -->
        </div>
        <div class="contact_form_container">
          <div class="contact_form_body">
            <div class="contact_form_heading">
                <h2>
                  CONTACT US:
                </h2>
                <p>
                   Please fill the form in a decent manner.
                </p>
              </div>
            <div class="contact_form_info_body">
              <form action="c_data.php" method="post">
                <div class="contact_form_rows">
                  <label>
                    FULL NAME:
                  </label><br>
                  <input type="text" name="contact_form_name"  height="30">
                </div>
                 <div class="contact_form_rows">
                  <label>
                    E-mail:
                  </label><br>
                  <input type="email" name="contact_form_email"  height="30">
                </div>
                 <div class="contact_form_rows">
                  <label>
                    Phone Number:
                  </label><br>
                  <input type="number" name="contact_form_phone_no"  height="30">
                </div>
                 <div class="contact_form_rows">
                  <label>
                    Message:
                  </label><br>
                 <textarea name="contact_form_mess" rows="10" cols="67"></textarea>
                </div>
                <div class="contact_form_rows">
                  <button name="c_submit">
                    submit
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      
      
    <footer>       
      <div id="footer">
           <!--  #DC3D24
            #232B2B
            #FFFFFF
            #E3AE57 -->
            <div class="footer_body">
               <div class="column_1">
              <h2>Contact</h2>
              <ul>
                <li>Hetauda School Of Management</li>
                <li>Hetauda-4, Makwanpur</li>
                <li>ph no: 057524701, 057524711, 057524765</li>
                <li>Emali: hsm@gmail.com</li>
              </ul>
            </div> <hr>
            <div class="column_2">
              <h2>Useful links</h2>
              <ul>
                <li><a href="homepage.php"> HOME </a> </li>
                <li><a href="#">FACULTY</a></li>
                <li><a href="form.php">ADMISSION</a></li>
                <li><a href="news.php">NEWS & EVENT</a></li>
                <li><a href="#">PROGRAMMES</a></li>
                <li><a href="contact.php" >CONTACT</a></li>
              </ul>
            </div> <hr>
            <div class="column_3">
              <h2>About Us</h2>
              <ul>
                <li> <a href="#"> Privacy policy </a></li>
                <li><a href="#">Term & condition</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>  <hr>
              <div class="footer_icon" style="width:20%;">
                <a href="https://www.facebook.com/groups2HSM.forall/">
                  <i class="fab fa-facebook fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/hsm.edu.np/">
                  <i class="fab fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter fa-3x" aria-hidden="true"></i>
                </a>
                
              </div>      
          </div>
        
            </div>
           
           

      </footer>
  	</div>
  <script src="./script.js"></script>
</body>
</html>

