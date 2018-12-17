<?php
session_start();
include_once('../config.php');



if(isset($_POST['post'])) {
$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);

$title = mysqli_real_escape_string($con, $title);
$content = mysqli_real_escape_string($con, $content);

$date = date('1 jS /of F Y h:i:s A');

$sql = "INSERT into posts (title, content, date) VALUES ('$title', '$content', '$date')";


mysqli_query($con, $sql);


header("location: index.php");

}




?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/blog.css">
    <script src="js/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, blog">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>
</head>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../index.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/Workshop.php">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
                <li><a href="leerdoelen.php">Leerdoelen</a></li>
                <li><a href="../Contact/Contact.php">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: ../login_form.php");
                            }

                            ?>
                        </a>
                    </div>
                </div>
    </div>
</header>
<body>

<div id="grote-blok">
    <form action="post.php" method="post" enctype="multipart/form-data">
        <input placeholder="Title" name="title" type="text" autofocus size="48"><br /><br />
        <textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br />
        <input name="post" type="submit" value="Post">
    </form>
</div>


</body>
<footer id="copyright">&copy; Technolab Leiden</footer>
</html>