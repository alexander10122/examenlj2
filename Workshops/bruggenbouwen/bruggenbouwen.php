<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../CSS/Workshops.css">
    <script src="JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>

    <style>



    </style>
</head>
<div>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../../index.php"><img class="logo" src="../../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshop.php">Workshops</a></li>
                <li><a href="../../agenda/agenda.php">Agenda</a></li>
                <li><a href="../../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                <li><a href="../../blog/index.php">Blog</a></li>
                <li><a href="../../Contact/Contact.php">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../../uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: ../../login_form.php");
                            }

                            ?></a>
                    </div>
                </div>
    </div>

</header>

    <div id="game-tekst"><p>Bij deze game krijg je een inleiding hoe bruggebouwen in zijn werking zit, zodra je de brug op een juiste manier heb gemaakt dan rijd er een autootje overeen.</p></div>
    <embed id="gamie" src="https://games.engineering.com/cargobridge/bridge.swf" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="550" wmode="Opaque">

<div id="bordie"></div>
    <!--<section class="flex">
<div id="border-rechts">
    <img id="bridge1" src="img/bridge.png"/>
    <img id="bridge2" src="img/bridge1.png"/>
    <img id="bridge3" src="img/bridge2.png"/>

</div>
    </section>
    -->


<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>