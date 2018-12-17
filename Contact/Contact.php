<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Contact.css">
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
<body>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../index.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/Workshop.php">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
                <li><a href="../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
                <li><a href="Contact.php">Contact</a></li>
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
                                header("Location: ../login_form.html");
                            }

                            ?></a>
                    </div>
                </div>
    </div>
</header>

<div class="grid-container">
<table class="item1" style="width:100%">
    <tr>
        <td><i class="fa fa-phone" style="font-size:24px"></i></td>
        <td>071-5191324</td>
    </tr>
    <tr>
        <td><i class="fa fa-envelope-o" style="font-size:24px"></i></td>
        <td>info@technolableiden.nl</td>
    </tr>
    <tr>
        <td><i class="fa fa-map-marker" style="font-size:24px"></i></td>
        <td>Zweilandlaan 4 <br>
            2334 CS Leiden</td>
    </tr>
    <tr>
        <td><i class="fa fa-map-marker" style="font-size:24px"></i></td>
        <td>Lange Sint Agnietenstraat 10<br>
            2312 WC Leiden</td>
    </tr>
</table>
    <div id="contact-form">


    </div>

<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>