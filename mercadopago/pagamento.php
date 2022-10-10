<?php
require_once ('mercadopago.php');

$mp = new MP('APP_USR-104772573453035-112411-85648731eb82bbbaf51d1932448eccdb__LC_LD__-285250521');
$valor = intval($valor);
$payment_data = array(
	"transaction_amount" => $valor,
	"token" => $_POST['token'],
	"description" => $titulo,
	"installments" => 1,
	"payment_method_id" => $_POST['paymentMethodId'],
	"payer" => array (
		"email" => $email
	)
);

$payment = $mp->post("/v1/payments", $payment_data);
$status = $payment[response][status];
$_SESSION['StatusPag'] = $status;

header("LOCATION:../login.php");

?>
<script type="text/javascript">window.location.href="../login.php"</script>