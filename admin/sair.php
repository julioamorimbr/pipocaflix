<?php
session_start();
unset(
$_SESSION['PassADMIN'],
$_SESSION['LoginADMIN'],
$_SESSION['IdADMIN']);
header("LOCATION:home.php");
?>