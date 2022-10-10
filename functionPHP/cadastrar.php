<?php
session_start();
require("../conexao/conexao.php");
  $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $snome = mysqli_real_escape_string($con,$_POST['sobrenome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $submit= mysqli_real_escape_string($con, $_POST['submit']);
    $data = date('Y-m-d');
    $senha = md5($senha);
    if($submit){
$sql = mysql_query("SELECT * FROM `perfil_login` WHERE email='$email'");
$consulta = mysql_num_rows($sql);

if($consulta > 0){
	?><script type="text/javascript">alert("Email Já Existente");window.history.back(-1);</script><?
}elseif ($consulta == 0) {
	$cod = rand(100000000000,90000000000000);
	 mysql_query("INSERT INTO `perfil_login`(`email`, `nome`, `sobrenome`, `img`, `color`, `cod`) VALUES ('$email','$nome','$snome','superheroman','red','$cod')") or die(mysql_error());
	$cadastro = mysql_query("INSERT INTO `login_filmes`( `email`, `senha`, `cod`, `validate`, `pg_aproved`, `nivel`, `date_create`, `ref`, `meses`, `simultaneo_max`, `cod_pagamento`, `tel`, `create_date`) VALUES ('$email','$senha','$cod','1','1','0','0','0','0','0','0','0','$data')") or die(mysql_error());
	if($cadastro){
			$_SESSION['CadSucess'] = "Cadastro Feito Com Sucesso";
			?><script type="text/javascript">window.location.href="../login.php";</script><?

	}else{
			?><script type="text/javascript">alert("Error Ao cadastrar,  Tente Novamente!");window.history.back(-1);</script><?
	}
}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}