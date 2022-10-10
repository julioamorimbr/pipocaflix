<?php
	session_start();
	require("../../conexao/conexao.php");

	$id = mysqli_real_escape_string($con, $_GET['id']);
	if($_GET){
		$sql = mysql_query("SELECT * FROM `series_ep` WHERE id='$id'");
		$sqln = mysql_num_rows($sql);
		if($sqln > 0){
		$del	= 	mysql_query("DELETE FROM `series_ep` WHERE id='$id'");
			if($del){
					$_SESSION['FilmAddOK'] 	=	"Episodio Foi Apagado com sucesso";
					?><script type="text/javascript">window.history.back(-1);</script><?
			}else{
					$_SESSION['FilmAddFail'] 	=	"Erro Ao Tentar executar o processo, por favor tente novamente.";
					?><script type="text/javascript">window.history.back(-1);</script><?	
			}
		}else{
					$_SESSION['FilmAddFail'] 	=	"Episodio Inexistente";
					?><script type="text/javascript">window.history.back(-1);</script><?

		}
	}else{	
		?><script type="text/javascript">window.back.href(-1);</script><?
	}
?>