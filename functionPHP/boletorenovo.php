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
$submit	   = mysqli_real_escape_string($con,$_POST['submit']);

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

	if($pagamento_num != 0){
	
		$email_check = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email'");
		$email_num 	 = mysql_num_rows($email_check);
	
		if($email_num != 0){

			$pass = md5($senha);
			$cod  = rand(100000000000 , 90000000000000);
			$cod = str_replace("-", "", $cod);
			$date = date("Y-m-d");
			$data = date('Y-m-d', strtotime("+".$tempo." month",strtotime($date)));
			
			$action = $_GET['action'];

			if($action == "renovo"){
				
				$idmembro = mysqli_real_escape_string($con, $_GET['idm']);
				$renovo = mysql_query("UPDATE `login_filmes` SET `pg_aproved`='0' ,`date_create`='$data', `meses`='$tempo',`simultaneo_max`='$telas' WHERE id='$idmembro'");	
				if($renovo){
					$valor = str_replace(",", ".", $valor);
				include_once('../mercadopago/boleto.php');				
				}
			}
				
		
		
		}elseif($email_num == 0){
			$_SESSION['ErrorCad'] = "Cadastro não encontrado.";
			?><script type="text/javascript">window.history.back(-1);</script><?
		}
	}else{
		$_SESSION['ErrorCad'] = "Erro Ao Selecionar o plano, Por favor tente mais tarde.";
		?><script type="text/javascript">window.history.back(-1);</script><?
	}

}
 ?>