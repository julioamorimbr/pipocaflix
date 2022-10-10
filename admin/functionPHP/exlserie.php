<?php
session_start();
require("../../conexao/conexao.php");
	
	if($_GET){
		$idfilm = mysqli_real_escape_string($con, $_GET['id']);
			$check = mysql_query("SELECT * FROM `series` WHERE id='$idfilm'");
			$chec  = mysql_num_rows($check);
			if($chec > "0"){
				$sql = mysql_query("DELETE FROM `series` WHERE id ='$idfilm' LIMIT 1");

				if($sql){
					$_SESSION['FilmAddOK'] 	=	"A Série Foi Apagado com sucesso";
					?><script type="text/javascript">window.history.back(-1);</script><?
				}else{
					$_SESSION['FilmAddFail'] 	=	"A Série Nao Existe";
					?><script type="text/javascript">window.history.back(-1);</script><?	
				}
			}elseif($chec == "0"){
				$_SESSION['FilmAddFail'] 	=	"A Série Nao Existe";
				?><script type="text/javascript">window.history.back(-1);</script><?
			}
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}