<?php
session_start();
require("../conexao/conexao.php");

$id_pag = mysqli_real_escape_string($con,$_POST['plano']);
$nome 	= mysqli_real_escape_string($con,$_POST['nome']);
$sobrenome = mysqli_real_escape_string($con,$_POST['sobrenome']);
$uf = mysqli_real_escape_string($con,$_POST['uf']);
$cep = mysqli_real_escape_string($con,$_POST['cep']);
$cpf = mysqli_real_escape_string($con,$_POST['cpf']);
$rua = mysqli_real_escape_string($con,$_POST['rua']);
$telefone  = mysqli_real_escape_string($con,$_POST['telefone']);
$email 	   = mysqli_real_escape_string($con,$_POST['email']);
$senha     = mysqli_real_escape_string($con,$_POST['senha']);
$termos    = mysqli_real_escape_string($con,$_POST['termos']);
$numeroc	= mysqli_real_escape_string($con,$_POST['numeroc']);
$bairro 	= mysqli_real_escape_string($con,$_POST['bairro']);
$submit	   = "1";

if($submit){
	$pagamento_id = "SELECT * FROM `pagamento` WHERE id ='$id_pag'";
	$pagamento_id = mysql_query($pagamento_id);
	$pagamento = mysql_fetch_assoc($pagamento_id);
	$valor = $pagamento['valor'];
	$telas = $pagamento['telas'];
	$tempo = $pagamento['tempo'];
	$titulo= $pagamento['titulo'];
	$descricao = $pagamento['descricao'];
	$pagamento_num = mysql_num_rows($pagamento_id);
	if($pagamento_num > 0){
		$email_check = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email'");
		$email_num 	 = mysql_num_rows($email_check);
		if($email_num == 0){
			$pass = md5($senha);
			$cod  = rand(100000000000 , 90000000000000);
			$cod = str_replace("-", "", $cod);
			$date = date("Y-m-d");
			$data = date('Y-m-d', strtotime("+".$tempo." month",strtotime($date)));
			
			$insert = mysql_query("INSERT INTO `login_filmes`(`email`, `senha`, `cod`, `validate`, `pg_aproved`, `nivel`, `date_create`, `ref`, `meses`, `simultaneo_max`, `create_date`) VALUES ('$email','$pass','$cod','0','0','0','$data','0','$tempo','$telas','$date')") or die(mysql_error());
			mysql_query("INSERT INTO `perfil_login`(`email`, `nome`, `sobrenome`, `img`, `color`, `cod`) VALUES ('$email','$nome','$sobrenome','ninja','red','$cod')");
			if($insert){
				$_SESSION['CadSucess'] = "Cadastro feito com sucesso!";
				$valor = str_replace(",", ".", $valor);
					include_once('../mercadopago/pagamento.php');
			}else{
			$_SESSION['ErrorCad'] = "Houve um erro interno ao cadastrar, por favor tente novamente mais tarde.";
			?><script type="text/javascript">window.history.back(-2);</script><?
			}
		}elseif($email_num != 0){
			$_SESSION['ErrorCad'] = "Já Existe um cadastro utilizando esse email.";
			?><script type="text/javascript">window.history.back(-2);</script><?
		}
	}else{
		$_SESSION['ErrorCad'] = "Erro Ao Selecionar o plano, Por favor tente mais tarde.";
		?><script type="text/javascript">window.history.back(-2);</script><?
	}


}

			
	

 ?>