<?php
session_start();
if (isset($_GET['submit'])) {
    include('config.php');
//beveiliging tegen injection hacking
    $uname = mysqli_real_escape_string($con, $_GET['username']);
    $password = mysqli_real_escape_string($con, $_GET['password']);
    if ($uname != "" && $password != "") {
//slaat een sql query op in de variable $sql_query
        $sql_query = "select count(*) as cntUser from account where username='" . $uname . "' and password='" . $password . "'";
        //haalt alle gegevens op uit de database waar de username & wachtwoord gelijk mee zijn en geeft ze vervolgens mee aan de variable $result
        $result = mysqli_query($con, $sql_query);
        //zet de variable $result om in een bruikbaar resultaat en geef het mee aan variable $row
        $row = mysqli_fetch_array($result);

//slaat een sql query op in de variable $sql_query
        $sql_query2 = "select admin from account where username='" . $uname . "'";
        //haalt de admin gegevens op uit de database waar de username gelijk is die de gebruiker heeft ingevuld
        $result2 = mysqli_query($con, $sql_query2);
        //zet de variable $result2 om in een bruikbaar resultaat en geef het mee aan variable $row
        $row2 = mysqli_fetch_array($result2);

//maakt variable $admin en geef de waarde van row2
        $admin = $row2['admin'];
//maakt variable $admin en geef de waarde van row
        $count = $row['cntUser'];
//checkt of er een overeenkomming is met de ingevoerde gegevens, zo ja? ga dan door
        if ($count > 0) {
            //maakt een session username die we later kunnen gebruiken, bijvoorbeeld echo'en op de homepage of echo'en wie er online zijn a.t.m
            $_SESSION['username'] = $uname;
            $_SESSION['ingelogd'] = "ja";
            //checkt of de gebruiker een admin is, zo ja? maak dan een session variable aan genaamd 'admin' en geef die session variable de waarde 1
            if ($admin == 1) {
                $_SESSION['admin'] = 1;
            }
            header('Location: index.php');
        } else {
            //laat een echo zien wanneer de inlog gegevens verkeerd zijn ingevuld
            echo "Invalid username and password";
        }

    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="JS/desktop.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Stagairspot</title>
</head>
<header>
    <button id="button-nieuw" class="desktop" href="registratie/reg_form.php"><a href="registratie/reg_form.php"
                                                                                 class="desktop" id="font3">Ben je
            nieuw? klik hier</a></button>
    <img id="logo" class="desktop" alt="Logo Technolab" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
</header>
<body>

<div class="mobile button">
    <p>Deze website ondersteunt geen telefoons</p><br>
    <!--button aangemaakt met een onclick, wanneer hier op wordt gedrukt wordt een stukje javascript code geactiveerd-->
    <button onclick="naardesktop()">naar desktop versie</button>
</div>

<form id="form-login" class="desktop" method="GET" action="">
    <div id="font1">username</div>
    <input class="kleur-input" type="text" name="username"/><br>
    <div id="font2">password</div>
    <input class="kleur-input" type="password" name="password"/><br>
    <input type="submit" class="submit" name="submit" value="login"/><br>


</form>

</body>


<footer id="copyright" class="desktop">&copy; Technolab Leiden</footer>
</body>
</html> 