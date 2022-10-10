<?php
session_start();
require("../../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN'];


if($_POST && $idMembro != NULL){
$nome 	=	mysqli_real_escape_string($con, $_POST['nome']);
$img 	=	mysqli_real_escape_string($con, $_POST['img']);
$url 	=	mysqli_real_escape_string($con, $_POST['url']);
$sinopse=	mysqli_real_escape_string($con, $_POST['sinopseedit']);
$submit =	mysqli_real_escape_string($con, $_POST['submit']);
$idf 	=	mysqli_real_escape_string($con, $_POST['idfilmedit']);
$plano 	= 	mysqli_real_escape_string($con, $_POST['plano']);


	if($submit){
		if($nome != NULL && (isset($_POST))){
			$sql = mysql_query("UPDATE `filmes` SET `titulo`='$nome',`link`='$url',`img`='$img',`sinopse`='$sinopse' WHERE id='$idf'");
			if($sql){
				$_SESSION['FilmAddOK'] 	=	"O filme <strong>".$nome."</strong> Foi Editado com Sucesso!";
					?><script type="text/javascript">window.history.back(-1);</script><?
			}else{
				$_SESSION['FilmAddFail'] 	=	"Houve um erro ao tentar editar, por favor tente novamente";
					?><script type="text/javascript">window.history.back(-1);</script><?
			}
		}else{
			$_SESSION['FilmAddFail'] 	=	"O filme ".$nome." Não pode ser editado";
			?><script type="text/javascript">window.history.back(-1);</script><?
			
		}
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}
?>