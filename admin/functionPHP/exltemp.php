<?php
require("../../conexao/conexao.php");
session_start();

$id= mysqli_real_escape_string($con,  $_GET['id']);
$temp = mysqli_real_escape_string($con,  $_GET['temp']);

if($_GET){
	$sql = mysql_query("SELECT * FROM `temp` WHERE id='$id' && num='$temp'");
	$query = mysql_num_rows($sql);
	$fetch = mysql_fetch_assoc($sql);

	if($query > 0){
			$tag = $fetch['tag'];
			$del = mysql_query("DELETE FROM `temp` WHERE id='$id'");
			if($del){
				$del_ep = mysql_query("DELETE FROM `series_ep` WHERE tag_ep ='$tag' && temp='$temp'");
				$_SESSION['FilmAddOK'] 	=	"A TEMPORADA e os EPISODIOS foram deletados";
			?><script type="text/javascript">window.history.back(-1);</script><?
			}else{
			$_SESSION['FilmAddFail'] 	=	"Houve um erro ao tentar excluir a temporada, por favor tente novamente";
			?><script type="text/javascript">window.history.back(-1);</script><?
			}

	}elseif($query == 0){
		$_SESSION['FilmAddFail'] 	=	"Houve um erro ao tentar excluir a temporada, por favor tente novamente";
			?><script type="text/javascript">window.history.back(-1);</script><?
	}


}else{
	?>
	<script type="text/javascript">window.history.back(-1);</script>
	<?
}
?>