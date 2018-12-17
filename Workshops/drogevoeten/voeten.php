<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../CSS/PMA.css" rel="stylesheet" type="text/css">
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
    <p id="tekst-boven">Bij deze game moet je het water van punt a naar punt b brengen. Lukt het jou?</p>


    <iframe id="spel" src="https://funhtml5games.com?embed=pipemania" style="width:750px;height:550px;border:none;" frameborder="0" scrolling="no"></iframe>






</div>



    <footer id="copyright">&copy; Technolab Leiden</footer>


</body>
</html>