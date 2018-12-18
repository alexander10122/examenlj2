<!DOCTYPE html>
<html>
<head>
    <script src="js/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../CSS/zintuigen.css" rel="stylesheet" type="text/css">
    <title>Technolab Stagairspot</title>
</head>
<body>
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


<div id="quiz">
<p>Score: <text id="score001">0</text></p>

<div class="box002" ondrop="drop001(event)">
    <text ondragstart="dragStart001(event)" draggable="true" id="target001">Handen</text>
</div>

<div class="box002" ondrop="drop002(event)">
    <text ondragstart="dragStart002(event)" draggable="true" id="target002">Mond</text>
</div>

<div class="box002" ondrop="drop003(event)">
    <text ondragstart="dragStart003(event)" draggable="true" id="target003">Neus</text>
</div>

<div class="box002" ondrop="drop004(event)">
    <text ondragstart="dragStart004(event)" draggable="true" id="target004">Oren</text>
</div>

<div class="box002" ondrop="drop005(event)">
    <text ondragstart="dragStart005(event)" draggable="true" id="target005">Ogen</text>
</div>
<br /><br /><br /><br />

<div class="box001" ondrop="drop006(event)" ondragover="allowDrop005(event)" id="place001">Kijken</div>

<div class="box001" ondrop="drop007(event)" ondragover="allowDrop002(event)" id="place002">Proeven</div>

<div class="box001" ondrop="drop008(event)" ondragover="allowDrop004(event)" id="place003">Voelen</div>

<div class="box001" ondrop="drop009(event)" ondragover="allowDrop001(event)" id="place004">Ruiken</div>

<div class="box001" ondrop="drop010(event)" ondragover="allowDrop003(event)" id="place005">Luisteren</div><br /><br /><br />

<button onclick="submit001()">Submit</button>
<p id="message001"></p>
</div>


<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>