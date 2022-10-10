<?php
require("../conexao/conexao.php");
require_once "mercadopago.php";
$mp = new MP("104772573453035", "ky7e2xI8IwL9wjpOL5vQv0DWXRf2TjoA");

$topic = $_GET['topic'];
$id    = $_GET['id'];
if($topic == "payment"){

$filters = array (
    "id" => $id
);

$search_result = $mp->search_payment ($filters, 0, 1);
$status_pag = $search_result[response][results][0][collection][status];
$email      = $search_result[response][results][0][collection][payer][email];


$selec      = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email'");
$assoc  = mysql_fetch_assoc($selec);
$idm    = $assoc['id'];

if($idm){
    $insert = mysql_query("INSERT INTO `notificacao`(`status`, `tipo`, `id_m`) VALUES ('$status_pag','PAG','$idm')");
    if($status_pag == "approved"){
        $insertpg = mysql_query("UPDATE `login_filmes` SET `pg_aproved`='1' WHERE id='$idm'");
    }
}


}


?>  