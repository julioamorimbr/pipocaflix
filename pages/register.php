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
        $("#tel").mask("(99) 9 9999-9999");
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

<div class="row container">
  <form action="functionPHP/cadastrar.php" method="POST" class="col s12">
    <div class="divider"></div>
    <div class="row">
      <div class="col s12">
        <h2>Cadastre−se</h2>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="first_name" type="text" class="validate" name="nome" required="required">
        <label for="first_name">Nome</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="text" class="validate" name="sobrenome" required="required">
        <label for="last_name">Sobrenome</label>
      </div>
    </div>

    <div class="row">

     
        <div class="input-field col s12">
        <input type="email" id="email" name="email" class="validate" required="required">
        <label for="email"  data-error="Error">Email</label>
      </div>
    </div>
       <div class="row">
     
        <div class="input-field col s6">
      <input type="password" value="" name="senha" class="password validate"  id="password" >
        <label for="password"  data-error="Error">Senha</label>
      </div>
       <div class="input-field col s6">
        <input type="password" value="" name="confirm" class="password validate"  id="confirm" >
        <label for="confirm"  data-error="Erro! As Senhas não Conferem">Repetir Senha</label>
      </div>
    </div>
  
    <div class="row">
        <div class="input-field col s12">
        <input type="checkbox" name="termos" id="termos" required="required" />
    <label for="termos">Aceita Termos de Serviço?  <a href="termos.php" target="_blank"> Ler Termos </a></label>
      </div>
    </div>
   <div class="submitBtnContainer" data-reactid="18"><input type="submit" name="submit" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="button" autocomplete="off" tabindex="0" placeholder="button_see_plans" data-reactid="19" value="CADASTRAR-SE" name="submit"></div>
</form>
</div>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("As Senhas Não Conferem");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<style type="text/css">
@media screen and (max-width: 700px){
  h2{
    font-size: 18px;
  }
}
input[type='submit']{
  border:none;
}

.text-center{
  text-align: center;
}

.space-bot{
  margin-bottom: 35px;
}

.space-top{
  margin-top: 35px;
}

/* Title */

h1 {
    color: white;
    font-family: 'Roboto';
    text-transform: uppercase;
    font-weight: 900;
    font-size: 20px !important;
    text-align: center;
}

/* Sign Up */

.register {
  float: left;
    max-width: 400px ;
    max-height: 100px;
    margin-top: 100px;
    position: absolute;
    margin-left: 50%;
    left: -200px;
    top: 0;

}

.alert-danger{
  text-align: center;
}

.signup-screen {
    padding: 20px;
    padding-bottom: 40px;
    border-radius: 5px;
    background-color: #2c3940;
    box-shadow: 0 1px 6px rgba(0,0,0,.3);
    color: white;
}

.btn{
  border-radius: 2px;
}

.cancel{
  background-color: #df405a;
}

.done{
  background-color: #5CAB7D;
}

.done:hover{
  background-color: #6dc793;
}

.done:focus{
  background-color: #6dc793;
}

.cancel:hover{
  background-color: #f0435f;
}

.cancel:focus{
  background-color: #f0435f;
}

.input-group {
    width:100%;
}

.input-group .ng-invalid {
    border: 2px solid #e74c3c;
    border-radius: 3px;
}

/* Error Box */

.alert{
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 2px;
  border-color: #e85a71;
  background-color:  #e85a71;
  color: white;
  
}

.help-block {
    font-size: 12px !important;
    color: white
}
</style>
