<?php
session_start();
require("../../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN'];


if($_POST && $idMembro != NULL){
$nome 	=	mysqli_real_escape_string($con, $_POST['nome']);
$img 	=	mysqli_real_escape_string($con, $_POST['img']);
$sinopse=	mysqli_real_escape_string($con, $_POST['sinopseedit']);
$submit =	mysqli_real_escape_string($con, $_POST['submit']);
$idf 	=	mysqli_real_escape_string($con, $_POST['idfilmedit']);
$plano 	= 	mysqli_real_escape_string($con, $_POST['plano']);


	if($submit){
		if($nome != NULL && $img != NULL && $sinopse != NULL){
			$sql = mysql_query("UPDATE `series` SET `title`='$nome',`img`='$img', `sinopse`='$sinopse' WHERE id='$idf'");
			if($sql){
				$_SESSION['FilmAddOK'] 	=	"A Série <strong>".$nome."</strong> Foi Editado com Sucesso!";
					?><script type="text/javascript">window.history.back(-1);</script><?
			}else{
				$_SESSION['FilmAddFail'] 	=	"Houve um erro ao tentar editar, por favor tente novamente";
					?><script type="text/javascript">window.history.back(-1);</script><?
			}
		}else{
			$_SESSION['FilmAddFail'] 	=	"A Série <strong>".$nome."</strong> Não pode ser editado";
			?><script type="text/javascript">window.history.back(-1);</script><?
			
		}
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}
?>