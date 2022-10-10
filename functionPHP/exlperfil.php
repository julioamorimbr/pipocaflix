<?php
session_start();
require("../conexao/conexao.php");
$token = $_SESSION['ExlToken'];
$cod   = mysqli_real_escape_string($con, $_GET['cod']); 
$token_c = mysqli_real_escape_string($con, $_GET['token']);
$id = mysqli_real_escape_string($con, $_GET['id']);
if($token == $token_c){
	$insert = mysql_query("DELETE FROM `perfil_login` WHERE id='$id' && cod ='$cod'");
	if($insert){
		$_SESSION['ExlSucess'] = "O Perfil foi excluido com sucesso!";
	?><script type="text/javascript">window.location.href="../browser.php"</script><?
	}
}elseif($token != $token_c){
	$_SESSION['ExlFail'] = "Token Incorreto.";
	?><script type="text/javascript">window.history.back(-1);</script><?
}
?>