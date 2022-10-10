<?php
session_start();
require("../../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN'];


if($_POST && $idMembro != NULL){

$email  = 	mysqli_real_escape_string($con, $_POST['email']);
$plano  = 	mysqli_real_escape_string($con, $_POST['plano']);
$tela  = 	mysqli_real_escape_string($con, $_POST['tela']);
$nivel  = 	mysqli_real_escape_string($con, $_POST['nivel']);
$validate  = 	mysqli_real_escape_string($con, $_POST['validate']);
$statuspg  = 	mysqli_real_escape_string($con, $_POST['statuspg']);
$idmf  = 	mysqli_real_escape_string($con, $_POST['idmf']);
$submit =	mysqli_real_escape_string($con, $_POST['submit']);


	if($submit){
		if($email != NULL && $plano != NULL && $tela != NULL && $nivel != NULL && $validate != NULL && $statuspg != NULL && (isset($_POST))){
			
			$sql = mysql_query("UPDATE `login_filmes` SET `email`='$email',`validate`='$validate',`pg_aproved`='$statuspg',`nivel`='$nivel',`date_create`='$plano',`simultaneo_max`='$tela' WHERE id ='$idmf'") or die(mysql_error());
		if($sql){
		$_SESSION['FilmAddOK'] 	=	"O Usuario ".$nome."Foi Editado com sucesso";
			?><script type="text/javascript">window.history.back(-1);</script><?
		}			

			
		}else{
			$_SESSION['FilmAddFail'] 	=	"O Usuario ".$nome." Não pode ser editado";
			?><script type="text/javascript">window.history.back(-1);</script><?
			
		}
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}

?>