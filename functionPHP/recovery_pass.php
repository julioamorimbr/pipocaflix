<?php
session_start();
require("../conexao/conexao.php");

$senha = mysqli_real_escape_string($con, $_POST['senha']);
$senha = md5($senha);
$token = mysqli_real_escape_string($con, $_POST['token']);
$consul_token = mysql_query("SELECT * FROM forget WHERE token='$token' LIMIT 1");
$num_token 		= mysql_num_rows($consul_token);
if($num_token > 0){
	$consulta_token = mysql_fetch_assoc($consul_token);
	$idMembro = $consulta_token['id_m'];
	$mudapass = mysql_query("UPDATE login_filmes SET senha='$senha' WHERE id='$idMembro' LIMIT 1") or die (mysql_error());
	if($mudapass){
		mysql_query("DELETE FROM forget WHERE token='$token' LIMIT 1");
		$_SESSION['CadSucess'] = "A Senha foi alterada com sucesso!";
		?><script type="text/javascript">window.location.href="../login.php"</script><?
	}

}elseif($num_token == 0){
	header("LOCATION:../index.php");
	?><script type="text/javascript">window.history.back(-1);</script><?
}


?>