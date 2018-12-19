<?php
session_start();
if (isset($_GET['submit'])) {
    include('config.php');


    $uname = mysqli_real_escape_string($con, $_GET['username']);
    $password = mysqli_real_escape_string($con, $_GET['password']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from account where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $sql_query2 = "select admin from account where username='" . $uname . "'";
        $result2 = mysqli_query($con, $sql_query2);
        $row2 = mysqli_fetch_array($result2);


        $admin = $row2['admin'];

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $uname;
            $_SESSION['ingelogd'] = "ja";
            if($admin == 1) {
                $_SESSION['admin'] = 1;
            }
            header('Location: index.php');
        } else {
            echo "Invalid username and password";
        }

    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Stagairspot</title>
</head>
<header>
    <button id="button-nieuw" class="desktop" href="registratie/reg_form.php"><a href="registratie/reg_form.php" class="desktop" id="font3">Ben je
            nieuw? klik hier</a></button>
    <img id="logo" class="desktop" alt="Logo Technolab" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
</header>
<body>


<form id="form-login" class="desktop" method="GET" action="">
    <div id="font1">username</div>
    <input class="kleur-input" type="text" name="username"/><br>
    <div id="font2">password</div>
    <input class="kleur-input" type="password" name="password"/><br>
    <input type="submit" class="submit" name="submit" value="login"/><br>


</form>

</body>


<footer id="copyright" class="desktop" >&copy; Technolab Leiden</footer>
</body>
</html> 