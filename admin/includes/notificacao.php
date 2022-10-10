<?php 
	$notificacao1 = mysql_query("SELECT * FROM `notificacao` WHERE status = '1'");
	$notificacao2 = mysql_query("SELECT * FROM `notificacao` WHERE status = '2'");
	$notificacao3 = mysql_query("SELECT * FROM `notificacao` WHERE status = '3'");
	
	$row1 = mysql_num_rows($notificacao1);
	$row2 = mysql_num_rows($notificacao2);
	$row3 = mysql_num_rows($notificacao3);

?>
<style type="text/css">
	.notnof{
		color:rgba(180,180,180,1);
		text-align: center;
	}
</style>
<script type="text/javascript">
	function exlnotf(){
var r = confirm("Press a button!");
if (r == true) {
    location.href="?action=home"
} else {
   
}
	}
</script>
<?php while ($pago   = mysql_fetch_assoc($notificacao3)) { ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" onclick="exlnotf()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Pagamento Aprovado!</strong>  <br/><strong>Email:</strong> josuex120@gmail.com <strong>Nome:</strong> Josué Henrique  <strong>Total Pago</strong> R$: 12,00.
</div>
<?php } while($analise   = mysql_fetch_assoc($notificacao2)){ ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" onclick="exlnotf()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Pagamento Analise!</strong> <br/><strong>Email:</strong> josuex120@gmail.com <strong>Nome:</strong> Josué Henrique  <strong>Total Pago</strong> R$: 12,00.
</div>
<?php } while($aguardando = mysql_fetch_assoc($notificacao1)){ ?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" onclick="exlnotf()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Aguardando Pagamento!</strong> <br/><strong>Email:</strong> josuex120@gmail.com <strong>Nome:</strong> Josué Henrique  <strong>Total Pago</strong> R$: 12,00.
</div>
<?php } if($row1 == NULL && $row2 == NULL && $row3 == NULL ){ ?>
	<h2 class="notnof">Sem Notificações</h2>
 <? } ?>
