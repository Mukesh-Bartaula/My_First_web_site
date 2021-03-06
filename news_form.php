<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="headbar">
    <div class="logo">
        <a href="homepage.php"><img src="./img/logo.png"></a>
    </div>
    <div class="login">
        <a href = "logIn_page.php" class="log_in">log in</a>
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
        <li><a href="#" class="nav_but">FACULTY</a></li>
        <li><a href="#" class="nav_but">ADMISSION</a></li>
        <li><a href="news.php" class="nav_but active">NEWS & EVENT</a></li>
        <li><a href="./attendenceF/attendance.php" class="nav_but">ATTENDENCE</a></li>
        <li><a href="contact.php" class="nav_but">CONTACT</a></li>
    </ul>
</div>
<div class="contact_form_container">
    <div class="contact_form_body">
        <div class="contact_form_heading">
            <h2>
                News Data Form
            </h2>
            <p>
                Please fill the form in a decent manner.
            </p>
        </div>
        <div class="contact_form_info_body">
            <form action="newsDataSendToDb.php" method="get" enctype="multipart/form-data">
                <table>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Date:
                            </label><br>
                            <input type="text" name="news_date"  height="30" placeholder="Sunday,Feb 23,2022">
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Title:
                            </label><br>
                            <input type="text" name="news_title"  height="30">
                        </div>
                    </tr>

                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                Paragraph:
                            </label><br>
                            <textarea name="news_paragraph" rows="10" cols="67"></textarea>
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <label>
                                photo:
                            </label><br>
                            <input type="file" name="news_photoURL"  height="30">
                        </div>
                    </tr>
                    <tr>
                        <div class="contact_form_rows">
                            <button name="news_upload">
                                Upload
                            </button>
                        </div>
                    </tr>

                </table>

            </form>
        </div>
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
            <div class="footer_icon">
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


</body>
</html>