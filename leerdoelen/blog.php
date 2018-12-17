<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/leerdoel.css">
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



    </style>
</head>
<body onload="leerdoel1()">
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
                                header("Location: ../login_form.html");
                            }
                            
                            ?>
                        </a>
                    </div>
                </div>
    </div>
</header>




<!--
<?php
include('../config.php');



$sql = "select leerdoel from account where id=24";
$result = $con->query($sql);
//
//print_r(var_name, return_output)




















mysqli_close ($con)


?>
<script>
    var result = document.getElementById('result').value;
    console.log($result)
</script>
-->
</body>
<div id='leerdoel' value=".$result."></div>
<div id="big-border">
    <p id="text-bigborder">Hier zie je hoever je bent met je leerdoel, je stagebegeleider geeft om de zoveel tijd een cijfer</p>
<h1 id="text2-bigborder">je hebt een: <script type="text/javascript">document.write(leerdoel2)</script></h1>
</div>
<section id="lange-border">
    <div id="block1" class="bordes"></div>
    <div id="block2" class="bordes"></div>
    <div id="block3" class="bordes"></div>
    <div id="block4" class="bordes"></div>
    <div id="block5" class="bordes"></div>
    <div id="block6" class="bordes"></div>
    <div id="block7" class="bordes"></div>
    <div id="block8" class="bordes"></div>
    <div id="block9" class="bordes"></div>
    <div id= "block10" class="bordes"></div>
</section>
<h1 id="meter">10-METER</h1>


<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>