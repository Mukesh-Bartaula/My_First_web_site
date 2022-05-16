<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News</title>
 	<link rel="stylesheet" type="text/css" href="./style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>
<body>

  	<div class="container">
        <div class="headbar">
            <div class="logo">
                <a href="homepage.php"><img src="./img/logo.png"></a>
            </div>
            <?php if(isset($_SESSION['username']) && ($_SESSION['password'])){ ?>
            <div>
                <a href="logout.php" class="log_out">log out</a>
            </div>

            <?php }else{ ?>
            <div class="login">
                <a href="logIn_page.php" class="log_in">log in</a>
            </div>
            <?php } ?>
        </div>
      <div class="navbar">
        <ul>
          <li> 
            <a href="homepage.php" class="nav_but">
                  <i class="fa fa-home" aria-hidden="true" class="home_icon"></i>
                  <span class="home-text"> HOME </span>
            </a>
          </li>
          <li><a href="faculty.php" class="nav_but">FACULTY</a></li>
          <li><a href="form.php" class="nav_but">ADMISSION</a></li>
          <li><a href="#" class="nav_but active">NEWS & EVENT</a></li>
          <li><a href="./attendenceF/attendance.php" class="nav_but">ATTENDENCE</a></li>
          <li><a href="contact.php" class="nav_but">CONTACT</a></li>
        </ul>
      </div>
      <div class="newsContainer">
      			<div class="newsBody">
              <a  href="newsDetailPage.php">
	      			  <div class="card_container">
	      		       <img src="./img/clz_1.jpg">
                   <div class="newsParagraph">
	      				       <div class="heading">
	      					        <h3>
	      						         MAKWANPUR(Hetauda)
	      					        </h3>
	      				       </div>	
	      			
      	      				<p>
      	      					MAKWANPUR: A person died in a motorbike accident in Hetauda Sub-Metropolitan City-9 along the East-West Highway on Tuesday.

      	      				</p>
            	      				
      	      			</div>
      	      		</div>
            		
            	</a>

              <a href="newsDetailPage.php">
                <div class="card_container">
                   <img src="./img/clz_1.jpg">
                   <div class="newsParagraph">
                       <div class="heading">
                          <h3>
                             MAKWANPUR(Hetauda)
                          </h3>
                       </div> 
              
                      <p>
                        MAKWANPUR: A person died in a motorbike accident in Hetauda Sub-Metropolitan City-9 along the East-West Highway on Tuesday.

                      </p>
                            
                    </div>
                  </div>
                
              </a>
              <a href="./news_form.php">
                <div id="add_news" class="card_container" >
                    <i class="fa fa-plus fa-7x" style=" color: gray; display: flex; justify-content: center;align-items: center;width: 100%;
                    height: 100%"></i>
                </div>
              </a>

      	</div>
      </div>

       <footer>
       
          <div id="footer">
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
    <script src="https://kit.fontawesome.com/ba33ab971e.js"></script>
</body>	
</html>