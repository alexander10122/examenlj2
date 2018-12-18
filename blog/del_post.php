<?php
session_start();
include_once("../config.php");

if(!isset($_SESSION['username'])) {
    header("Location: ../login_form.php");
    return;
}
if(!isset($_GET['pid'])) {
    header("Location: index.php");
}
else {
    $pid = $_GET['pid'];
    $sql = "DELETE FROM posts WHERE id=$pid";
    mysqli_query($con, $sql);
    header("Location: index.php");
}

?>