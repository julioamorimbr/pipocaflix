<?php
session_start();
require("../../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN']   ;
if($idMembro != NULL){		
	
	if($_POST){
		$cod = mysqli_real_escape_string($con, $_POST['select']);
		$temporada = mysqli_real_escape_string($con, $_POST['temporada']);
		$submit		= mysqli_real_escape_string($con, $_POST['submit']);
		if($submit){
			if($cod != NULL && $temporada != NULL){
				$sql 	=	mysql_query("SELECT * FROM `temp` WHERE tag='$cod' && num ='$temporada'");
				$consulta = mysql_num_rows($sql);
				if($consulta == 0){
					$mysql = mysql_query("INSERT INTO `temp`(`tag`, `num`) VALUES ('$cod', '$temporada')");
					if($mysql){
						 $_SESSION['FilmAddOK'] = "A temporada Foi adicionada com sucesso!";
						?><script type="text/javascript">window.history.back(-1);</script>?<?	
					}
				}else{
					$_SESSION['FilmAddFail'] = "Já Existente!";
					?><script type="text/javascript">window.history.back(-1);</script><?

				}
			}else{
				$_SESSION['FilmAddFail'] = "Campo Vazio";
		?><script type="text/javascript">window.history.back(-1);</script><?
		}
		}else{
			$_SESSION['FilmAddFail']	=	"Error";
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}
