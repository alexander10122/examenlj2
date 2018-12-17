<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../CSS/stroomgeeft.css" rel="stylesheet" type="text/css">
    <title>Technolab Stagairspot</title>
</head>
<body data-gr-c-s-loaded="true">
<header>
    <div class="custom=padding">
        <nav>
            <a href="../../index.php"><img class="logo"
                                               src="../../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg"
                                               alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshop.php">Workshops</a></li>
                <li><a href="../../agenda/agenda.php">Agenda</a></li>
                <li><a href="../../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                <li><a href="../../Contact/Contact.php">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../../uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if ($_SESSION['ingelogd'] == "ja") {
                                echo $_SESSION['username'] . "<br>";

                            } else {
                                header("Location: ../../login_form.php");
                            }

                            ?></a>
                    </div>
                </div>


    </div>

</header>
<div id="border-buiten">
    <h1 id="border-buiten-tekst1">Stroom Geeft energy game.</h1>
    <p id="border-buiten-tekst2">Het doel van dit spel is om het lampje van stroom te voorzien! Lukt het jou om het
        lampje te laten branden?</p>
    <section id="flex-container-pijlen">
        <img id="pijl-links" alt="pijl-links" src="../../img/pijl-links.png">
        <img id="pijl-rechts" alt="pijl-rechts" src="../../img/pijl-rechts.png">
    </section>

    <canvas id="border-spel">


    </canvas>

    <!--spel plaatjes-->
    <div id="gloeilamp">
        <img id="lamp-uit" src="../../img/gloeilamp-uit.png"/>
        <img id="lamp-aan" src="../../img/gloeilamp-aan.png"/>
    </div>
    <img id="target" src="../../img/schakkelaar.png"/>
    <script src="./bl.ocks.org_files/rotate.js.download"></script>
    <img id="target2" src="../../img/schakkelaar.png"/>
    <script src="./bl.ocks.org_files/rotate2.js.download"></script>
    <button id="zetaan-knop" onclick="activate()">uit/aan</button>
    <script src="js/js.js"></script>

    <footer id="copyright">&copy; Technolab Leiden</footer>


</body>
</html>