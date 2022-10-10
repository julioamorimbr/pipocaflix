<noscript>

    <div class="alert alert-danger" role="alert"><Strong>Error!!</Strong> Para o Funcionamento Correto da nossa aplicação é necessario que o JavaScript esteja ativado</div>
</noscript>
<?php
date_default_timezone_set("Brazil/East");
$pagamento = $_SESSION['ApPagt'];
$expire_acc = $_SESSION['ExpireAcc'];
$IdMembro   = $_SESSION['IdMembro'];
$data_hj    = date("Y-m-d");

$consulta_user = mysql_query("SELECT * FROM login_filmes WHERE id='$IdMembro' LIMIT 1") or die (mysql_error());
$consulta_usuario = mysql_num_rows($consulta_user);


?>