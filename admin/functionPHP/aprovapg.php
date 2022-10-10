<?php
session_start();
require("../../conexao/conexao.php");
$idm = mysqli_real_escape_string($con, $_GET['id']);
if($_GET){
	if($idm){
		$consulta = mysql_query("SELECT * FROM `login` WHERE id='$idm'");
		$fetch = mysql_num_rows($consulta);
		if($fetch){
				$sql = mysql_query("UPDATE `login` SET `pg_aprovad`='1' WHERE id='$idm'");
				if($sql){

					$_SESSION['FilmAddOK'] = "Pagamento"
					?><script type="text/javascript">window.history.back(-1);</script><?
				}elseif(empty($sql)){
					$_SESSION['FilmAddFail'] = "Não Foi possivel aprovar o pagamento."
					?><script type="text/javascript">window.history.back(-1);</script><?
				}
			}elseif(!isset($fetch)){
				 $_SESSION['FilmAddFail'] = "Usuario Não encontrado."
		?><script type="text/javascript">window.history.back(-1);</script><?
			}
	}else{
		 $_SESSION['FilmAddFail'] = "Usuario Não encontrado."
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}else{
?><script type="text/javascript">window.history.back(-1);</script><?
}
?>