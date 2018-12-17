<html>
<head>
    <link href="../CSS/registratie.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Stagairspot</title>
</head>
<header>
    <img id="logo" alt="Logo Technolab" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
    <button id="ga-terug" href="../login-form.html" alt="terug knop"><a href="../login_form.php" id="font5">Ga terug naar login page</a></button>
</header>
<body>
<?php

include('../config.php');
if(isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $activatie = $_POST['activatie'];
if ($activatie=='2665'){
    mysqli_query($con,"INSERT INTO account(id, username, password, email) VALUES (NULL, '$uname', '$pass', '$email');");$message = "Account is aangemaakt! druk op OK en je wordt doorgestuurd!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header( "refresh:0.1;url=../login_form.php" );
}
else{
    echo 'activation code isnt working!!';
}
}   
$con->close();
?>
<form id="form-reg" method="POST" action="">
    <div id="font1">username</div> <input class="kleur-input" type="text" id="username" name="username"/><br>
    <div id="font2">password</div> <input class="kleur-input" type="password" id="password" name="password"/><br>
    <div id="font3">email</div> <input class="kleur-input" type="text" id="email" name="email"/><br>
    <div id="font4">activatie-code</div> <input class="kleur-input" type="password" name="activatie"/><br>
    <input type="submit" class="submit" name="submit" value="submit"/><br>
</form>
</body>
<footer>
    <footer id="copyright">&copy; Technolab Leiden</footer>
</footer>
</html>