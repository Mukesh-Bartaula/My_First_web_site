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
            <a href="homepage.php"><img src="./img/logo.png"></a>
        </div>
        <?php if(isset($_SESSION['username']) == true){ ?>
            <div>
                <a href="../logout.php" class="log_out">log out</a>
            </div>

        <?php }else{ ?>
            <div class="login">
                <a href="../logIn_page.php" class="log_in">log in</a>
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
            <li><a href="./faculty.php" class="nav_but">
                    <span style="padding-right: 10px"><i class="fa fa-book"></i></span>
                    FACULTY
                    <span style="padding-left: 10px; font-size: 15px"><i class="fa fa-chevron-down"></i></span>
                </a>
                <div class="faculty_dropdown-menu">
                    <a href="science.php">Science</a>
                    <a href="bachelor.php">Bachelor</a>
                    <a href="commerce.php">Commerce</a>
                </div>
            </li>
            <li><a href="form.php" class="nav_but">ADMISSION</a>

            </li>
            <li><a href="./news.php" class="nav_but">
                    <span style="margin-right: 10px;"> <i class="fa fa-newspaper"></i></span>
                    NEWS & EVENT
                </a>
            </li>
            <li>
                <a href="./attendenceF/attendance.php" class="nav_but">
                    <span style="margin-right: 10px;"><i class="fa fa-clipboard-list"></i> </span>ATTENDANCE
                </a>

            <li><a href="./contact.php" class="nav_but active">
                    <span style="padding-right: 10px; font-size: 15px"><i class="fa fa-address-book"></i></span>
                    CONTACT
                </a>
                <div class="faculty_dropdown-menu">
                    <a href="./contact.php">contact</a>
                    <a href="contact_form_message.php">form</a>
                </div>
            </li>
        </ul>
    </div>

    <div  class="dailyAtt_table" style="min-height: 100vh;max-height: 100%">
           <table class="atttable" style="display: flex;justify-content: center">

                <tr>
                    <th>
                        S.N
                    </th>
                    <th>
                        Student Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        phone no.
                    </th>
                    <th>
                        message
                    </th>
                </tr>

                <?php
                include "db.php";
                $sql = "SELECT * FROM  contact ORDER BY name";
                $query = mysqli_query($conn, $sql);
                $i=1;
                while($result = mysqli_fetch_assoc($query)){

                    ?>
                    <tr>
                        <td>
                            <?php
                            echo $i;

                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['name'] ;

                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['email'] ;

                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['phone'] ;

                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['message'] ;

                            ?>
                        </td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>

            </table>


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

