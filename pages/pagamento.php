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
<style type="text/css">
  @media screen and (min-width: 752px){
  .cartao{
    width: 50% !important;
    float: left;
    position: relative;
    left: -25%;
    margin-left: 50%; 
  }
  }
  @media screen and (max-width: 751px){
  .cartao{
    width: 90% !important;
    float: left;
    position: relative;
    left: -45%;
    margin-left: 50%; 
  }
  .pag_form{
    font-size: 10px !important;
  }
  .input-field label{
    font-size: 10px !important;
  }
  .input-field label.active{
     font-size: 10px !important;
  }
  }
</style>
<form action="" method="POST" id='form' class="col s12"  >
    <div class="divider"></div>
    <div class="row">
      <div class="col s12">
        <h2></h2>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="first_name" type="hidden" value="<?=$_POST['nome']?>" class="validate" name="nome" required="required">
        
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="hidden" value="<?=$_POST['sobrenome']?>" class="validate" name="sobrenome" required="required">
       
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="hidden" id="tel"  value="<?=$_POST['telefone']?>" class="validate" minlength="10" name="telefone" required="required" />
        
      </div>
        <div class="input-field col s6">
        <input type="hidden" id="email" name="email" value="<?=$_POST['email']?>" class="validate" required="required"/>
 
      </div>
    </div>
       <div class="row">
     
        <div class="input-field col s6">
      <input type="hidden"  name="senha"  value="<?=$_POST['senha']?>" class="password validate"   id="password" />
        
      </div>
       <div class="input-field col s6">
        <input type="hidden" name="confirm" value="<?=$_POST['confirm']?>" class="password validate"  id="confirm" />
     
      </div>
    </div>
    <input type="hidden" name="plano" value="<?=$_POST['plano']?>">
 
<div class="row">
  <label for="pag_form" style="text-align: center;"  data-error="Error">Forma de Pagamento</label>
  <div class="input-field col s12">
    <select style="display: block;" id="form_select" class="pagamento_form" onchange="javascript:handleSelect(this)">
        <option style="display: none;">Forma de Pagamento</option>
        <option id="boleto" value="boleto">Boleto Bancario Mercadopago</option>
        <option id="card" value="card">Cartão de Credito Mercadopago</option>
    </select>
  </div>
  <div class="boleto" class="boleto" style="display: none;">
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
  </div>

</div>

<script type="text/javascript">
  function handleSelect(elm){
  var selectplan = $('#form_select').val();

  if(selectplan == 'boleto'){
    $('.boleto').css('display','block');
    $('.cartao').css('display','none');
    $('#cardholderName').val('null');
    $('#docNumber').val('null');
    $('#cardNumber').val('null');
    $('#cardExpirationMonth').val('null');
    $('#cardExpirationYear').val('null');
    $('#securityCode').val('null');
     $('#cpf').val('');
    $('#cep').val('');
    $('#rua').val('');
    $('#numeroc').val('');
    $('#bairro').val('');
    $('#cidade').val('');
$("#form").attr("action","functionPHP/boleto.php");
$("#form").submit();

  }
  if(selectplan == "card"){
    $('.boleto').css('display','none');
    $('.cartao').css('display','block');
    $('#form').attr('id', '');
    $('#cardholderName').val('');
    $('#docNumber').val('');
    $('#cardNumber').val('');
    $('#cardExpirationMonth').val('');
    $('#cardExpirationYear').val('');
    $('#securityCode').val('');

  }

}
function card(elm){
  var nome       = $('#cardholderName').val();
  var cpf        = $('#docNumber').val();
  var cardnumber = $('#cardNumber').val();
  var mm       = $('#cardExpirationMonth').val();
  var yy       = $('#cardExpirationYear').val();
  var cvc       = $('#securityCode').val();
}

 
</script>
</div>
</form>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<div class="cartao" style="display: none;">
<form action="functionPHP/card.php" method="post" id="pay" name="pay" >
  <div class="row">
      <div class="col s12">
        <h2></h2>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="first_name" type="hidden" value="<?=$_POST['nome']?>" class="validate" name="nome" required="required">
        
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="hidden" value="<?=$_POST['sobrenome']?>" class="validate" name="sobrenome" required="required">
       
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="hidden" id="tel"  value="<?=$_POST['telefone']?>" class="validate" minlength="10" name="telefone" required="required" />
        
      </div>
        <div class="input-field col s6">
        <input type="hidden" id="email" name="email" value="<?=$_POST['email']?>" class="validate" required="required"/>
 
      </div>
    </div>
       <div class="row">
     
        <div class="input-field col s6">
      <input type="hidden"  name="senha"  value="<?=$_POST['senha']?>" class="password validate"   id="password" />
        
      </div>
       <div class="input-field col s6">
        <input type="hidden" name="confirm" value="<?=$_POST['confirm']?>" class="password validate"  id="confirm" />
     
      </div>
    </div>
    <input type="hidden" name="plano" value="<?=$_POST['plano']?>">
 
    <fieldset>
        <ul> 
            <li>
                <label for="cardNumber">Numero do cartao:</label>
                <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Ex: 4509 9535 6623 3704" />
            </li>
            <li>
                <label for="securityCode">Codigo de Segurança:</label>
                <input type="text" id="securityCode" data-checkout="securityCode" placeholder="Ex: 123" />
            </li>
            <li>
                <label for="cardExpirationMonth">Mês:</label>
                <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="Ex: 12" />
            </li>
            <li>
                <label for="cardExpirationYear">Ano:</label>
                <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="Ex: 2015" />
            </li>
            <li>
                <label for="cardholderName">Nome Completo:</label>
                <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="Ex: Carlos Dos Santos" />
            </li>
            <li>
                <!-- <label for="docType">Document type:</label>
                <select id="docType" data-checkout="docType"></select> -->
                <input type="hidden" name="docType" id="docType" data-checkout="docType" value="CPF">
            </li>
            <li>
                <label for="docNumber">CPF:</label>
                <input type="text" id="docNumber" data-checkout="docNumber" placeholder="999999999-99" />
            </li>
        </ul>
        <div class="submitBtnContainer"  data-reactid="18" ><input type="submit" value="FAZER PAGAMENTO" /></div>
    </fieldset>
</form>

</div>
<script type="text/javascript">
  
Mercadopago.setPublishableKey("APP_USR-ce6fd02a-53e8-4906-9343-ea76c60ed294"); 
Mercadopago.getIdentificationTypes();
function addEvent(el, eventName, handler){
    if (el.addEventListener) {
           el.addEventListener(eventName, handler);
    } else {
        el.attachEvent('on' + eventName, function(){
          handler.call(el);
        });
    }
};

function getBin() {
    var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
    return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
};

function guessingPaymentMethod(event) {
    var bin = getBin();

    if (event.type == "keyup") {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};

function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        // do somethings ex: show logo of the payment method
        var form = document.querySelector('#pay');

        if (document.querySelector("input[name=paymentMethodId]") == null) {
            var paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('name', "paymentMethodId");
            paymentMethod.setAttribute('type', "hidden");
            paymentMethod.setAttribute('value', response[0].id);

            form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    }
};

addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);
doSubmit = false;
addEvent(document.querySelector('#pay'),'submit',doPay);
function doPay(event){
    event.preventDefault();
    if(!doSubmit){
        var $form = document.querySelector('#pay');
        
        Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

        return false;
    }
};
function sdkResponseHandler(status, response) {
    if (status != 200 && status != 201) {
        alert("verify filled data");
    }else{
       
        var form = document.querySelector('#pay');

        var card = document.createElement('input');
        card.setAttribute('name',"token");
        card.setAttribute('type',"hidden");
        card.setAttribute('value',response.id);
        form.appendChild(card);
        doSubmit=true;
        form.submit();
    }
};
</script>