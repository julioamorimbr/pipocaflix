<?php
require("../../conexao/conexao.php");

	$nome 	   = mysqli_real_escape_string($con, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
	$email	   = mysqli_real_escape_string($con, $_POST['email']);
	$passsword  = mysqli_real_escape_string($con, $_POST['passsword']);
	$telas	   = mysqli_real_escape_string($con, $_POST['nivel']);
	$nivel	   = mysqli_real_escape_string($con, $_POST['telas']);
	$data = date("Y-m-d");
	$validade =  mysqli_real_escape_string($con, $_POST['validade']);
	if($nome != NULL && $nome != NULL && $email != NULL && $passsword != NULL && $telas != NULL){
		$mysql = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email'") or die(mysql_error());
		$consulta = mysql_num_rows($mysql);
		if($consulta == 0 ){
			$pass = md5($passsword);
			$cod = rand(100000000000000,90000000000000);
			$user = mysql_query("INSERT INTO `login_filmes`( `email`, `senha`, `cod`, `validate`, `pg_aproved`, `nivel`, `date_create`, `ref`, `meses`, `simultaneo_max`, `create_date`,`tel`) VALUES ('$email','$pass','$cod','1','1','$nivel','$validade','0','0','$telas','$data','$tel')") or die (mysql_error());
			mysql_query("INSERT INTO `perfil_login`(`email`, `nome`, `sobrenome`, `img`, `color`, `cod`) VALUES ('$email','$nome','$sobrenome','ninja','red','$cod')");
			if($user){
					?> <script type="text/javascript">alert("Criado Com sucesso!");window.history.back(-1);</script><?
			}else{
					?> <script type="text/javascript">alert("Erro ao criar!"); window.history.back(-1);</script><?
			}
		}elseif($consulta > 0){
				?> <script type="text/javascript">alert("Conta já existente!");window.history.back(-1);</script><?
		}

	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}






?>