<?php
if(isset($_GET['news_upload'])) {
    $news_date = $_GET['news_date'];
    $news_title = $_GET['news_title'];
    $news_paragraph = $_GET['news_paragraph'];
    $news_photoURL = $_GET['news_photoURL'];
    include "db.php";
    $sql = "INSERT INTO news_content(date,title,paragraph,photo_url)
            values('$news_date', '$news_title', '$news_paragraph', '$news_photoURL')";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error:" . mysqli_error();
    }
    header("location:news.php");
}


