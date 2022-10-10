<?php
session_start();
require("conexao/conexao.php");
  $idM    =   $_SESSION['IdMembro'] ;
  $loginM =    $_SESSION['Login'] ;
  date_default_timezone_set("Brazil/East");
  $verificar = mysql_query("SELECT * FROM login_filmes WHERE id='$idM'") 	or die (mysql_error());
	$verify = mysql_fetch_assoc($verificar);
	$data_expirar = $verify['date_create'];
	$pagamento_expire = $verify['pg_aproved'];
	$data_hj = date("Y-m-d");

if($idM == NULL && $loginM == NULL){
	?>
	<script type="text/javascript">window.history.back(-1)</script>
	<?
}

?>
