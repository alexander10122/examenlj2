<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Workshops.css">
    <script src="js/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>

    <style>

        .texten {
            padding-left: .2vw;
            margin-top: 1.5vw;
            position: absolute;
            text-align: center;
        }

        .placeholder {
            width: 15.55vw;
            height: 5vw;
            margin-top: 5vw;
        }

        #blok1 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 370px;
            margin-left: 167px;
            position: absolute;

        }
        #blok2 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 370px;
            margin-left: 801px;
            position: absolute;

        }
        #blok3 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 370px;
            margin-left: 1436px;
            position: absolute;
        }
        #blok4 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 703px;
            margin-left: 167px;
            position: absolute;

        }
        #blok5 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 703px;
            margin-left: 801px;
            position: absolute;

        }
        #blok6 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 703px;
            margin-left: 1436px;
            position: absolute;

        }
        #blok7 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 1073px;
            margin-left: 167px;
            position: absolute;

        }
        #blok8 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 1073px;
            margin-left: 801px;
            position: absolute;

        }
        #blok9 {
            display: none;
            width: 300px;
            height: 10vw;
            background-color: #cccccc;
            margin-top: 1073px;
            margin-left: 1436px;
            position: absolute;

        }
        #copyright {
            margin-top: 10vw;
        }

    </style>
</head>
<div>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../index.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="Workshop.php">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
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
                                header("Location: ../login_form.php");
                            }

                            ?></a>
                    </div>
                </div>
    </div>

</header>
    <section id="blokken">
    <div id="blok1"><p class="texten">Hier kom je te wweten hoe de workshop zintuigen in elkaar zit</p><img class="placeholder" src="../img/Placeholder.png"/></div>
    <div id="blok2"><p class="texten">RobotBattle! welke robot overleeft het</p><img class="placeholder" src="../img/robot.gif"/></div>
    <div id="blok3"><p class="texten">lukt het jou om het lampje te laten branden?</p><img class="placeholder" src="../img/stroom.gif"/></div>
    <div id="blok4"><p class="texten">laten we doctertje spelen!</p><img class="placeholder" src="../img/Placeholder.png"/></div>
    <div id="blok5"><p class="texten">laten we water vervoeren! lukt het jou om punt B te bereiken?</p><img class="placeholder" src="../img/water.gif"/></div>
    <div id="blok6"><p class="texten">Hoeveel schade kan jij aanrichten als virus? laat het ons zien!</p><img class="placeholder" src="../img/microbiologieorganisme.gif"/></div>
    <div id="blok7"><p class="texten">Heb jij kennis met de elementen, test je kennis</p><img class="placeholder" src="../img/Placeholder.png"/></div>
    <div id="blok8"><p class="texten">bouw een brug zonder hem te laten instoren! je moet zwaren objecten verplaatsen</p><img class="placeholder" src="../img/brug.gif"/></div>
    <div id="blok9"><p class="texten">kan jij strategisch dit karretje laten rijden?</p><img class="placeholder" src="../img/Placeholder.png"/></div>
    </section>
<div class="workshop-flex">
<div onmouseover="mousein1()" onmouseleave="mouseout1()" class="Workshopblok"><h1>Zintuigen</h1></br>
<a href="zintuigen/zintuigen.php">Klik hier</a></div>

<div onmouseover="mousein2()" onmouseleave="mouseout2()" class="Workshopblok"><h1>Praten met apparaten</h1></br>
<a href="praten-met-apparaten/PMA.php">Klik hier</a></div>

<div onmouseover="mousein3()" onmouseleave="mouseout3()" class="Workshopblok"><h1>Stroom geeft energie</h1></br>
<a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>
</div>

    <div class="workshop-flex">
        <div onmouseover="mousein4()" onmouseleave="mouseout4()" class="Workshopblok"><h1>Atonomie</h1></br>
            <a href="Atonomie/Atonomie.php">Klik hier</a></div>

        <div onmouseover="mousein5()" onmouseleave="mouseout5()" class="Workshopblok"><h1>Droge voeten</h1></br>
            <a href="drogevoeten/voeten.php">Klik hier</a></div>

        <div onmouseover="mousein6()" onmouseleave="mouseout6()" class="Workshopblok"><h1>Microbiologie</h1></br>
            <a href="microbiologie/microbiologie.php">Klik hier</a></div>
    </div>

    <div class="workshop-flex">

        <div onmouseover="mousein7()" onmouseleave="mouseout7()" class="Workshopblok"><h1>Experimenteren met elementen</h1></br>
            <a href="Experimenteren_ME/Experimenteren_ME.php">Klik hier</a></div>


        <div onmouseover="mousein8()" onmouseleave="mouseout8()" class="Workshopblok"><h1>Bruggenbouwen</h1></br>
            <a href="bruggenbouwen/bruggenbouwen.php">Klik hier</a></div>


        <div onmouseover="mousein9()" onmouseleave="mouseout9()" class="Workshopblok"><h1>Bouw je attractie</h1></br>
            <a href="Bouw_je_attractie/attractie.php">Klik hier</a></div>

    </div>

<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>