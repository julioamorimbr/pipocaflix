<?php
$membro = mysql_query("SELECT * FROM login_filmes WHERE id='$idMRen' LIMIT 1") or die(mysql_error());
$fetch = mysql_fetch_assoc($membro);
$cod= $fetch['cod'];
$dado = mysql_query("SELECT * FROM perfil_login WHERE cod='$cod' ORDER by id ASC");
$dados = mysql_fetch_assoc($dado); 
?>
<form action="functionPHP/boletorenovo.php?action=renovo&idm=<?=$idMRen?>" method="POST">

	<Style>
	input[type=radio]{
		float: left;
	position: inherit !important;
	visibility: visible !important;
	left: 0 !important;
	}	
	li{
	float: left;
	padding:15px 15px;
		
	}
	
	</style>
       <div class="row">

       <div class="radius" style="width: 100%; margin-top:90px; height: 100px;">
				  <ul>
        
           <strong> <p>Plano:</p></strong>
        <?php 
        $plano = mysql_query("SELECT * FROM `pagamento`");
        while($pag = mysql_fetch_assoc($plano)) {
        ?>
        <li>
            <input type="radio" name="plano" value="<?=$pag['id']?>"/><?=$pag['titulo'] ." - ". $pag['valor']." - ".$pag['telas']."(Telas)"." - ".$pag['tempo']."Mês(es)"?></li>
        <?php } ?>
    </ul>     
      
       </div>
       <div class="row" style="width: 100%; display: block;">
       <? if($dados['nome'] != NULL) { ?>
        <input id="first_name" type="hidden" value="<?=$dados['nome']?>" class="validate" name="nome" required="required">
  		<? } elseif($dados['nome'] == NULL) { ?>
       	 <div class="input-field col s6">
         <input id="first_name" type="text" value="<?=$dados['nome']?>" class="validate" name="nome" required="required">
          <label for="first_name" style="text-align: center;"  data-error="Error">Nome</label>
        </div>
        <? } ?>
        
		<? if($dados['sobrenome'] != NULL) { ?>
        <input id="last_name" type="hidden" value="<?=$dados['sobrenome']?>" class="validate" name="sobrenome" required="required">
  		<? }elseif($dados['sobrenome'] == NULL) { ?>
       	 <div class="input-field col s6">
         <input id="last_name" type="text" value="<?=$dados['sobrenome']?>" class="validate" name="sobrenome" required="required">
          <label for="last_name" style="text-align: center;"  data-error="Error">Sobrenome</label>
        </div>
        <? } ?>
        <input type="hidden" id="email" name="email" value="<?=$fetch['email']?>" class="validate" required="required"/>
        </div>
     <?php if($fetch['tel'] == NULL){
?> 
	
	 <div class="input-field col s12">
         <input type="text" id="tel" class="validate" minlength="10" name="telefone" required="required" />
          <label for="tel" style="text-align: center;"  data-error="Error">Telefone</label>
        </div>
 <?
 } elseif($fetch['tel'] != NULL){ ?>
 <input type="hidden" id="tel"  value="<?=$fetch['tel']?>" class="validate" minlength="10" name="telefone" required="required" />
<?php } ?>
    </div>
   
<div class="row">
        <div class="input-field col s4">
          <input type="text" id="cpf" name="cpf" class="validate" required="required"/>
          <label for="cpf" style="text-align: center;"  data-error="Error">CPF</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="cep" name="cep" class="validate" required="required"/>
          <label for="cep" style="text-align: center;"  data-error="Error">CEP</label>
        </div>
         <div class="input-field col s4">
          <input type="text" id="rua" name="rua" class="validate" required="required"/>
          <label for="rua" style="text-align: center;"  data-error="Error">Rua</label>
        </div>

      </div>
       <div class="row">
        <div class="input-field col s4">
          <input type="text" id="numeroc" name="numeroc" class="validate" required="required"/>
          <label for="numeroc" style="text-align: center;"  data-error="Error">Nº Casa</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="bairro" name="bairro" class="validate" required="required"/>
          <label for="bairro" style="text-align: center;"  data-error="Error">Bairro</label>
        </div>
         <div class="input-field col s4">
          <input type="text" id="cidade" name="cidade" class="validate" required="required"/>
          <label for="cidade" style="text-align: center;"  data-error="Error">Cidade</label>
        </div>
         <div class="input-field col s12">
          <select style="display: block;" name="uf">
            <option style="display: none;">UF</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
          </select>
        </div>


      </div>
<strong style="color: red;">* Não guardamos em nossos servidores dados que contenha nesse formulario de pagamento. todos os dados contidos aqui são enviados diretamente para o mercadopago.</strong>
 <div class="submitBtnContainer"  data-reactid="18" ><input type="submit" name="submit" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="button" autocomplete="off" tabindex="0" placeholder="button_see_plans" data-reactid="19" value="FAZER PAGAMENTO" name="submit"></div>
 </form>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>


<script type="text/javascript">
  var myApp = angular.module("myApp", []);
myApp.controller("RegisterCtrl", function ($scope) {

});

</script>
<script type="text/javascript">
$(document).ready(function(){
          jQuery(function($){       
        $("#cpf").mask("999999999-99");
          });
});
$(document).ready(function(){
          jQuery(function($){       
        $("#tel").mask("(99) 9 9999-9999");
          });
});
$(document).ready(function(){
          jQuery(function($){       
        $("#docNumber").mask("999999999-99");
          });
});
$(document).ready(function(){
          jQuery(function($){       
        $("#cardNumber").mask("9999 9999 9999 9999");
          });
});
$(document).ready(function(){
          jQuery(function($){       
        $("#cep").mask("99999-999");
          });
});
</script>
<script type="text/javascript">
 $(function() {
$('.password').focus(function() {
  $('.password').prop('type', 'text');
});
$('.password').blur(function() {
  $('.password').prop('type', 'password');
});
$('.password').keyup(function() {
  var password = $('#password').val();
  var confirm = $('#confirm').val();
  if (password == confirm) {
   
  } else {
   
  }
});
});

</script>