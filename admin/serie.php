<?php 
$cod = $_GET['select'];
$temp = $_GET['temporada'];
header("LOCATION:index.php?action=newep&cod=$cod&temp=$temp");
?>