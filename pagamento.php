<?php 
require("conexao/conexao.php");
if($_SERVER['SERVER_PORT'] != '443') {
header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
exit();
}
$email = mysqli_real_escape_string($conn, $_GET['email']);

$sql  = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email' LIMIT 1");
$mys  = mysql_fetch_assoc($sql);  
$cod  = mysqli_real_escape_string($conn,$_GET['cod']);
$val  = mysql_query("SELECT * FROM `pagamento` WHERE link='$cod' LIMIT 1");
$valor = mysql_fetch_assoc($val);
$titulo_pag = $valor['titulo'];
$valor_pag = $valor['valor'];
if($mys != NULL){
?>
<center>
<p>Olá Sr(a), Estamos muito feliz em te-lo conosco.</p>
</center>
<!DOCTYPE html>

<script type="text/javascript"
src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
</script>
  <?php

$data['token'] ='E7978E5D507E43F8B298D96DF0405BF0';
$data['email'] = 'icasercelulares@gmail.com';
$data['currency'] = 'BRL';
$data['itemId1'] = '1';
$data['itemQuantity1'] = '1';
$data['itemDescription1'] = $titulo_pag;
$data['itemAmount1'] = $valor_pag;
$data['reference'] = $mys['cod_pagamento'];
$url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

$data = http_build_query($data);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
$xml= curl_exec($curl); 

curl_close($curl);

$xml= simplexml_load_string($xml);

$cod_t = $xml -> code;

?>
<style type="text/css"> 
#pagamento{
    padding: 15px;
    background:rgba(0,235,0,1);
    border:1px solid rgba(100,100,100,1);
    border-radius:50px;
    color:white;
    width: 150px;
    cursor: pointer;

  } 
  #pagamento:hover{
    background:rgba(0,225,0,1);
    transition: all 0.5s;
  }

</style>

<center>
<meta name="viewport" content="width=device-width, user-scalable=no">
       <!DOCTYPE html>
<html>

    <head>
        <title>Pagamento</title>
    </head>
<center>
Aguarde.... Você está sendo redirecionado para o sistema do pagseguro.</br>
em caso de não redirecionamento <a href="https://pagseguro.uol.com.br/v2/checkout/payment.html?code=<?=$cod_t?>">Clique Aqui</a>
</center>
<script type="text/javascript">
location.href="https://pagseguro.uol.com.br/v2/checkout/payment.html?code=<?=$cod_t?>";
</script>
</html>
  </center>
<?php
}else{
  ?>
  <script type="text/javascript">alert("Seu Email não foi encontrado em nosso banco de dados"); history.back(-1);</script>
  <?
}
?>