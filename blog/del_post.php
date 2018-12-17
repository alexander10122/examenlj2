<?php
session_start();
include_once("../config.php");

if(!isset($_SESSION['username'])) {
    header("Location: ../login_form.php");
    return;
}
?>