<?php
require("../conexao/conexao.php");
require_once ('mercadopago.php');

$mp = new MP ("2571192436693357", "GtsSzLllMNs8FRdnAV6QVGmAjKCY4JPO");

$filters = array (
	"id" => "3229959723"
);

$search_result = $mp->search_payment ($filters, 0, 1);
$status_pag = $search_result[response][results][0][collection][status];
$email      = $search_result[response][results][0][collection][payer][email];


$selec 		= mysql_query("SELECT * FROM `login_filmes` WHERE email='$email'");
$assoc  = mysql_fetch_assoc($selec);
$idm 	= $assoc['id'];

if($idm){
	$insert = mysql_query("INSERT INTO `notificacao`(`status`, `tipo`, `id_m`) VALUES ('$status_pag','PAG','$idm')");
	if($status_pag == "approved"){
		$insertpg = mysql_query("UPDATE `login_filmes` SET `pg_aproved`='1' WHERE id='$idm'");
	}
}

?>
