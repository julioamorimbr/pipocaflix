<?php
session_start();
require("../../conexao/conexao.php");
$nome = mysqli_real_escape_string($con, $_POST['nome']);
$url = mysqli_real_escape_string($con, $_POST['url']);
$ep = mysqli_real_escape_string($con, $_POST['ep']);
$temp = mysqli_real_escape_string($con, $_POST['temp']);
$id_serie = mysqli_real_escape_string($con, $_POST['id_serie']);
$submit = mysqli_real_escape_string($con, $_POST['submit']);

if($submit){
	if($nome != NULL && $url != NULL && $ep != NULL && $temp != NULL && $id_serie != NULL){
		$sql = mysql_query("SELECT * FROM `series_ep` WHERE id='$id_serie'");
		$num = mysql_num_rows($sql);
		if($num > 0){
				$mysql = mysql_query("UPDATE `series_ep` SET `titulo`='$nome',`link`='$url',`temp`='$temp',`num_ep`='$ep' WHERE id='$id_serie'");
				if($mysql){
					$_SESSION['FilmAddOK'] 	=	"Episodio editado com sucesso";
					?><script type="text/javascript">window.history.back(-1)</script><?
				}
			}
			elseif($num == 0){
		$_SESSION['FilmAddFail'] 	=	"Episodio inexistente.";
		?><script type="text/javascript">window.history.back(-1);</script><?					
			}
	}else{
		$_SESSION['FilmAddFail'] 	=	"Erro pois há campos vazios.";
		?><script type="text/javascript">window.history.back(-1);</script><?	
	}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}

?>