<?php
session_start();
include_once('../config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/blog.css">
    <script src="../JS/zoekbar.js"></script>
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
                <li><a href="../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                <li><a href="index.php">Blog</a></li>
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
    <?php
    //bb engine, hiermee kunnen ze hun tekst leuk/mooi maken
    include_once("nbbc/nbbc.php");
    $bbcode = new BBCode;
    //voert een query uit
            $sql = "SELECT * FROM posts ORDER BY id DESC";
        $res = mysqli_query($con, $sql) or die(mysqli_error());
        $posts = "";
        //checkt het aantal resultaten en als hij resultaten heeft dan laat hij ze zien
    if(mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $date = $row['date'];
            $output = $bbcode->Parse($content);
            $posts .= "<div><h2><a href 'view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin<hr /></div>";
        }
        echo $posts;
    }
    else {
        //laat een echo zien wanneer er geen posts aanwezig zijn
        echo 'There are no posts to display!';
    }?><br><?php
    //controles om te kijken of de gebruiker een admin is of niet
    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
        echo "<a href='admin.php'>Admin panel</a> | <a href='../uitloggen.php'>Uitloggen</a>";
    }
    if (!isset($_SESSION['username'])) {
        echo "<a href='../login_form.php'>Login</a>";
    }
    if (isset($_SESSION['username']) && !isset($_SESSION['admin'])) {
        echo "<a href='../uitloggen.php'>logout</a>";
    }

    ?>
    <!--onclick wat er voor zorgt dat er een zoek pop-up opent waar je vervolgens iets in kunt zoeken-->
    <a id="zoeklink" href="../zoek-functie-blog/index.php" onclick="zoekbrowser(this.href);return false">Teveel posts? Klik hier om te zoeken!</a>
</div>


</body>
<footer id="copyright">&copy; Technolab Leiden</footer>
</html>