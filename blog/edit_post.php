<?php
session_start();
include_once('../config.php');
//checkt of de gebruiker is ongelogd, zo niet? dan wordt de gebruiker terug gestuurd naar de login page anders mag de gebruiker zijn weg vervolgen
if(!isset($_SESSION['username'])) {
    header("Location: login_form.php");
    return;
}
//als php niet een pid meekrijgt van de index/admin pagina dan wordt de gebruiker naar de homepage gestuurd
if(!isset($_GET['pid'])) {
    header("Location: index.php");
}
//maakt een variable $pid aan en slaat daar de pid op die hij heeft mee gekregen vanaf de admin pagina
$pid = $_GET['pid'];
//als de gebruiker de gegevens verstuurd vanaf de update form dan wordt dit stukje code actief
if(isset($_POST['update'])) {
    //beveiligd de form tegen injection hacking
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);
    $title = mysqli_real_escape_string($con, $title);
    $content = mysqli_real_escape_string($con, $content);
    //geeft variable $date de huidige datum
    $date = date('1 jS /of F Y h:i:s A');
    //maakt de variable $sql aan en geeft daar een query aan mee
    $sql = "UPDATE posts SET title='$title', content='$content', date='$date' WHERE id=$pid";
//checkt of de form wel volledig is ingevuld anders laat een echo zien en stop de sql uitvoer proces
    if ($title == "" || $content == "") {
        echo "Please complete your post!";
        return;
    }
    //sql query wordt uitgevoerd
    mysqli_query($con, $sql);
    //gebruiker wordt terug gestuurd naar de index
    header("Location: index.php");
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

    $sql_get = "SELECT * FROM posts WHERE id=$pid LIMIT 1";
    $res = mysqli_query($con, $sql_get);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $title = $row['title'];
            $content = $row['content'];

            echo "<form action='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'>";
            echo "<input placeholder='Title' name='title' type='text' autofocus value='$title' size='48'><br /><br />";
            echo "<textarea placeholder='Content' name='content' rows='20' cols='50'>$content</textarea><br />";
        }
    }
?>
    <input name="update" type="submit" value="update"/>
    </form>
</div>


</body>
<footer id="copyright">&copy; Technolab Leiden</footer>
</html>