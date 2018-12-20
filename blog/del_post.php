<?php
session_start();
include_once("../config.php");
//checkt of de gebruiker is ingelogd, zo niet? dan moet de gebruiker terug keren naar de login pagina
if(!isset($_SESSION['username'])) {
    header("Location: ../login_form.php");
    return;
}
//checkt of de gebruiker een pid mee heeft gekregen van de admin pagina, zo niet? dan moet de gebruiker terugkeren naar de index
if(!isset($_GET['pid'])) {
    header("Location: index.php");
}
//deze else-statement voert de verwijdering proces uit, hij verwijderd de post die bij de pid hoort daarna stuurt hij de gebruiker door naar de index
else {
    $pid = $_GET['pid'];
    $sql = "DELETE FROM posts WHERE id=$pid";
    mysqli_query($con, $sql);
    header("Location: index.php");
}
?>