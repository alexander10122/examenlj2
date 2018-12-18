<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/agenda.css">
    <script src="JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>
	



    <?php
    // set up basic SSL connection
    $ftp_server = "185.114.157.172";
    $ftp_username = "bob@spelsalon.net";
    $ftp_userpass = "debouwer";

    $ftp_conn = ftp_ssl_connect($ftp_server) or die("Could not connect to $ftp_server");

    // login
    $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

    // then do something...

    // close SSL connection
    ?>



    <style>



    </style>
</head>
<body>
<header>
    <div class="custom=padding">
        <nav>
    <a href="../index.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/Workshop.php">Workshops</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a href="../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                <li><a href="../blog/index.php">Blog</a></li>
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
                                header( "../login_form.php" );
                            }

                            ?></a>
                    </div>
                </div>
    </div>

</header>
<div id="grote-blok">
    <h1 id="h-agenda">Agenda</h1>
    <iframe id="excel" src="https://outlook.office365.com/owa/calendar/587a4593c5e14cbeb35550d51c3d20dc@technolableiden.nl/2ae816d458ad4d7b865500c5f2b5d4963468342393624655268/calendar.html"></iframe>
</div>

</body>


<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>

