<?
session_start();
require("conexao/conexao.php");
include_once("functionPHP/function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Planos, Preços e assinatura PipocaFlix</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>
<style type="text/css">
	body, html {
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    background-color: #f3f3f3;
    color: #333;
    font-size: 16px;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.logo{
	float: left;
	padding: 20px 0px;
}
.logo img{
	width: 167px;
}
.content{
	width: 94%;
	margin-left: 3%;
}
.entrar{
	float: right;
    color: #e50914;
    font-weight: 700;
    font-size: 16px;
    line-height: 90px;
}
.box{
	float: left;
	width: 100%;
	
}
.header{
	float: left;
	width: 100%;
	height: 90px;
}
.container{
	    margin: 0 auto 15px;
    padding: 20px 3% 60px;
    max-width: 978px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.entrar a{color: #e50914;}
.planContainer, .regContainer, .verifyCardContainer {
    text-align: center;
    max-width: 440px;
    margin: 0 auto;
}
.simpleContainer {
    width: 100%;
    overflow: hidden;
    -webkit-tap-highlight-color: transparent;
}
.planContainer .stepLogo, .regContainer .stepLogo, .verifyCardContainer .stepLogo {
    display: block;
    margin: 10% 0 10%;
}
.planStepLogo {
    background: url(https://assets.nflxext.com/ffe/siteui/acquisition/simplicity/Checkmark.png) no-repeat 50% 50%;
    -moz-background-size: 60px;
    background-size: 60px;
    height: 60px;
}
.stepHeader {
    display: inline-block;
}
.stepIndicator {
    text-align: left;
    display: block;
    font-size: 13px;
    line-height: 19px;
}
h1 {
    font-size: 23px;
    margin: 0 0 .4em;
    display: block;
   
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}
.planContainer .contextBody, .regContainer .contextBody, .verifyCardContainer .contextBody {
    margin: 30px 0;
    
}
.planContainer .contextRow, .regContainer .contextRow, .verifyCardContainer .contextRow {
    max-width: 300px;
    display: inline-block;
}
.submitBtnContainer {
    text-align: center;
    max-width: 440px;
    margin: 0 auto;
}
.nf-btn.nf-btn-oversize {
    font-size: 19px;
    padding: .75rem 25.33333333px;
    min-width: 110px;
    min-height: 60px;
    width: 100%;
    line-height: 19px;
}
.nf-btn-solid.nf-btn-primary {
    color: #fff;
    background-color: #e50914;
}
@media only screen and (min-width: 500px){
.nf-btn {
    width: auto;
}

.nf-btn {
    position: relative;
    font-size: 1rem;
    padding: .75rem 1.33333333rem;
    min-width: 74px;
    min-height: 48px;
    width: 100%;
}

.nf-btn {
    display: inline-block;
    text-decoration: none;
    line-height: 1rem;
    vertical-align: middle;
    cursor: pointer;
    font-weight: 700;
    letter-spacing: .025rem;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: none;
    position: relative;
    min-height: 48px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.25);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.25);
    box-shadow: 0 1px 1px rgba(0,0,0,.25);
    color: #000;
}
}
button {
	border:none;
	font-size: 16px !important;
	font-weight: 600;
}
.footer-divider {
    height: 0;
    width: 100%;
    border-top: 1px solid #e6e6e6;
}
.comparison {
  max-width: 960px;
  margin: 0 auto;
  margin-bottom: 20px;
  margin-top: 30px;
  font: 13px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-align: center;
  padding: 10px;
}

.comparison table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: auto;
}

.comparison td,
.comparison th {
  border-right: 1px solid #E8E8E8;
  empty-cells: show;
  padding: 10px;
  border-top: 1px solid #E8E8E8;
  border-bottom: 1px solid #E8E8E8;
  color: #808080;
  font-size: 15px;
}

.comparison tbody tr:nth-child(odd) {
  display: none;
}

.comparison .compare-row {
  background: #F7F7F7;
}

.fa-check {
  color: #d80000;
}

.comparison th {
  font-weight: normal;
  padding: 0;
  border-top: 0px solid #E8E8E8;
  border-bottom: 0px solid #E8E8E8;
}

.comparison tr td:first-child {
  text-align: left;
  padding: 15px;
  border-left: 1px solid #E8E8E8;
  border-top: 1px solid #E8E8E8;
}

.comparison .product,
.comparison .tl {
  color: #FFF;
  padding: 10px;
  font-size: 14px;
}

.comparison .tl2 {
  border-right: 0;
}

.comparison .product {
  background: #69C7F1;
  height: 40px;
  font-size: 1.6em;
}

.comparison .price-info {
  padding: 15px;
}

.comparison .price-now,
.comparison .price-now span {
  color: #808080;
}

.comparison .price-now span {
  font-size: 36px;
  color: #545454;
}

.comparison .price-now p {
  font-size: 14px;
  text-align: center;
  line-height: 16px;
  display: inline;
}

.comparison .price-buy {
  background: #d80000;
  padding: 10px 20px;
  font-size: 14px;
  display: inline-block;
  color: #fff;
  text-decoration: none;
  border-radius: 3px;
  text-transform: uppercase;
  margin: 5px 0 10px 0;
  letter-spacing: 1px;
  cursor: pointer;
  -webkit-transition: .3s all ease;
  transition: .3s all ease;
}

.comparison .price-buy:hover {
  background: #fd0303;
}

@media screen and (min-width: 721px) and (max-width: 1000px) {
  .table_ul li {
    letter-spacing: 0px;
  }
  .comparison .price-now span {
    font-size: 32px;
  }
  .comparison .price-now p {
    display: block;
  }
}

@media screen and (max-width: 720px) {
  .table_ul {
    padding: 0px;
  }
  .table_ul li {
    font-size: 10px;
    line-height: 16px;
    padding: 3px 0;
  }
  .comparison {
    max-width: 100%;
  }
  .comparison td:first-child,
  .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display: table-row;
    background: #F7F7F7;
  }
  .comparison .row {
    background: #FFF;
  }
  .comparison td,
  .comparison th {
    border: 1px solid #CCC;
    border-top: none;
    padding: 10px;
  }
  .price-info {
    border-top: 0 !important;
    padding: 10px 0 !important;
  }
  .price-info p {
    line-height: 8px;
    font-size: 8px !important;
  }
  .comparison .compare-row {
    background: #ffffff;
  }
  .comparison .price-now p {
    display: block;
  }
  .comparison .price-now span {
    font-size: 24px;
  }
  .comparison .qbse {
    font-size: 1.2em;
  }
  .comparison td {
    font-size: 14px;
  }
  .comparison th {
    font-size: 14px;
  }
}
</style>
<body>
  <?php 
  $errorcad = $_SESSION['ErrorCad'];
  if($_SESSION['ErrorCad']){
  ?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong style="font-weight: bold;">Error</strong> <?=$errorcad?>
</div>
 <? } ?>

	<div class="content">
		<div class="header">
			<div class="logo"><img src="img/logo.png"></div>
			<div class="entrar"><a href="login.php">Entrar</a></div>
		</div>
			<?php
			$action = $_GET['action'];
      $plano = $_GET['plan'];
				if($action == NULL){
					include_once("pages/pass_1.php");
				}
				elseif($action == "planform"){
          include_once("pages/pass_2.php");
        }
        elseif($action =="register"){
          include_once("pages/register.php");
        }
        elseif ($action == "pagamento") {
          include_once("pages/pagamento.php");
        }
			?>
		
	</div>
	<div class="footer-divider" data-reactid="22"></div>
</body>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<?php
unset($_SESSION['ErrorCad']);
?>