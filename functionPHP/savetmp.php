<?php
require("../conexao/conexao.php");
$tipo = $_POST['tipo'];
$id_F = $_POST['id_F'];
$idPerfil = $_POST['idPerfil'];
$tempo    = $_POST['tempo'];

$consulta = mysql_query("SELECT * FROM `assistir` WHERE id_F='$id_F' && id_m ='$idPerfil'");
$cons = mysql_num_rows($consulta);

if($cons == 0){
$save = mysql_query("INSERT INTO `assistir`(`type`, `id_f`, `id_m`,`tempo`) VALUES ('$tipo','$id_F','$idPerfil','$tempo')");
}elseif($cons > 0 ){
	$save = mysql_query("UPDATE `assistir` SET `tempo`='$tempo' WHERE id_F='$id_F' && id_m ='$idPerfil'");
}
?>