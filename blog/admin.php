<?php
session_start();
include_once('../config.php');
//checkt of de gebruiker een admmin is, zo niet? dan keert de gebruiker terug naar de login form
if (!isset($_SESSION['admin']) && $_SESSION['admin'] != 1) {
    header("Location: ../login_form.php");
    return;
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
    <?php
    //voert sql query uit, wanneer hij een fout ziet laat hij het zien met een error code
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $res = mysqli_query($con, $sql) or die(mysqli_error());
    //maakt de variable $posts aan
    $posts = "";
    //echo't alle resultaten
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $date = $row['date'];
    //maakt admin controls en geeft ze mee aan de variable $admin
            $admin = "<div><a href='del_post.php?pid=$id'>Delete</a> | <a href='edit_post.php?pid=$id'>Edit</a></div>";
    //$posts krijgt alle posts binnen met de admin controls
            $posts .= "<div><h2><a href 'view_post.php?pid=$id' target='_blank'>$title</a></h2><h3>$date</h3>$admin<hr /></div>";
        }
        //echo't alle posts uit de database
        echo $posts;

    } else {
        //laat een echo zien als er geen posts aanwezig is
        echo 'There are no posts to display!';
    }
    ?>
<br><a href="post.php">Toevoegen</a>
</div>


</body>
<footer id="copyright">&copy; Technolab Leiden</footer>
</html>