<?php
session_start();

if($_SESSION['ingelogd'] == "ja"){


}
else{
    header("Location: login_form.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS/homecss.css">
        <script src="JS/js.js"></script>
        <meta charset="UTF-8">
        <meta name="description" content="Stagair local spot">
        <meta name="keywords" content="Technolab, Stagairs, Workshops">
        <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Technolab Stagairspot</title>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="chat.js"></script>
    </head>
    <header>
        <div class="custom=padding">
            <nav>
                <a href="index.php"><img class="logo" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
                <ul class="menu-area">
                    <li><a href="Workshops/Workshop.php">Workshops</a></li>
                    <li><a href="agenda/agenda.php">Agenda</a></li>
                    <li><a href="leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                    <li><a href="Contact/Contact.php">Contact</a></li>
                    <div class="dropdown">
                        <li><a class="dropbtn">&#9881;
                                <i class="fa fa-caret-down"></i>
                            </a></li>
                        <div class="dropdown-content">
                            <a href='uitloggen.php'>Uitloggen</a>
                            <a><?php
                                echo $_SESSION['username']."<br>";
                                ?></a>
                        </div>
                    </div>
        </div>

    </header>
    <div id="welkomblok">
        <h1>Welkom <?php echo $_SESSION['username'];?></h1>
    </div>



    <iframe  id="frame-chat" src='https://minnit.chat/TechnolabChat?embed&web' width='1000' height='500' style='border:none; margin-left: 24vw; margin-top: 4vh;' allowTransparency='true'></iframe><br>

    </body>

    </html>