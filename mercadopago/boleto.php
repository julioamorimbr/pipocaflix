<?php
require_once ('mercadopago.php');
require('../conexao/conexao.php');

$mp = new MP('APP_USR-104772573453035-112411-85648731eb82bbbaf51d1932448eccdb__LC_LD__-285250521');
$valor = intval($valor);
$data_atual  = date("Y-d-m");
$data_expire = date('Y-m-d', strtotime("+4 days",strtotime($data_atual))); 
$hora = date("H:i:s");

$payment_data = array(

	"date_of_expiration" => $data_expire."T".$hora.".000-04:00",
	
	"transaction_amount" => $valor,
	
	"token" => "ff8080814c11e237014c1ff593b57b4d",
	"description" => $titulo,
	"installments" => 1,
	"payment_method_id" => "bolbradesco",

	"payer" => array(

			"email"=> $email,
			"first_name"=> $nome,
			"last_name"=> $sobrenome,
			"identification" => array(
					"type"=> "CPF",
					"number"=> $cpf
			),
			"address" => array(
					"zip_code"=> $cep,
					"street_name"=> $rua,
					"street_number"=> $numeroc,
					"neighborhood"=> $bairro,
					"city"=> $cidade,
					"federal_unit"=> $uf
			)
		)
);

$payment = $mp->post("/v1/payments", $payment_data);
$external_resource_url = $payment[response][transaction_details][external_resource_url];
$explode = explode("&", $external_resource_url);
$explode = explode("?", $explode['0']);
$explode = explode("=", $explode['1']);
$payment_id = $explode['1'];
header("LOCATION:".$external_resource_url);
?>
<script type="text/javascript">
	window.location.href="<?=$external_resource_url?>"
</script>


