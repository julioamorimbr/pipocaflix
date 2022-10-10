<?php
session_start();
$error_login  = $_SESSION['ErrorCont'];
$idM    =   $_SESSION['IdMembro'];
$cadsuccess = $_SESSION['CadSucess'];
if($_SESSION['StatusPag'] == "approved"){
  $cadsuccess =  "Sua Conta foi criada com sucesso. Pagamento Aprovado!";
}
elseif($_SESSION['StatusPag'] == "rejected"){
  $error_login =  "Pagamento Reprovado!";
}
if($idM != NULL){
  header("LOCATION: browser.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>PipocaFlix - Login</title>
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
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<style type="text/css">
@media all and (max-width: 700px){
			.logo img{
  	 max-width:  75px;
  	 float: left;
  	}
  	.login-body{
    border-bottom: solid 1px #dcdde0;
  	position: relative;
  	left: 0px !important;
  	margin-left: 0px !important;
  	flex: 1;
  	float: left;
  	margin-bottom: 0px !important;
  	width: 100% !important;
  	z-index: 5;
  	background-color: #f3f3f3;
  }
footer{
		    border-top: 1px solid #e5e5e5 !important;
}
hr{
	    border-top: solid 1px #dcdde0 !important;
}
.header{
	height: 56px !important;
	    background-color: #fafafa !important;
    border-bottom: solid 1px #dcdde0 !important;
}

}
	body{
		margin:0px;
		padding: 0px;
		background: url("https://images2.alphacoders.com/691/691516.jpg") no-repeat;
		background-size: 100%;
		 font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
			    color: #333;
			    font-size: 16px;
			    direction: ltr;
			    -webkit-font-smoothing: antialiased;
			    -moz-osx-font-smoothing: grayscale;
			  	font-family: sans-serif;
			    -ms-text-size-adjust: 100%;
			    -webkit-text-size-adjust: 100%;
	}
		.header{
  		width: 100%;
  		position: relative;
  		z-index: 5;
  		top:0;
  		background: 0 0;
   	    border: 0;
   	    height: 90px;
   	    top:0;
   
  	}
  	
  	.logo{
  		    margin-left: 3%;
  		    float: left;
  		    margin-top: 20px;
  	}
  	@media screen and (min-width: 700px){
	  	.logo img{
	  	 max-width:  167px;
	  	float: left;
	  	}
  	}


   














  .login-body{
  	position: relative;
  	left: -215px;
  	margin-left: 50%;
  	flex: 1;
  	float: left;
  	margin-bottom: 30px;
  	width: 430px;
  	z-index: 5;
  	background-color: #f3f3f3;
  }
  .login-content{
  	width: 85%;
  	float: left;
  	margin-left: 7.5%;
  	padding: 2px;

  }
  .login-content h1{
  	font-size: 29px;
  	padding-top: 10px;
  	font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
  	margin-bottom: 40px;
  }
  .login-content p{
  	float: left;
  	margin-left: 3px;
  	margin-bottom: -2px;
  	font-size: 13.5px;
  }
  .form-control{
  	width: 100%;
  	height: 40px;
  	margin-bottom: 15px;	
  }
  input[type="password"]{
  	margin-bottom: 30px;
  }
  input[type="submit"]{
  	width: 100%;
  	height:40px;
  	border:1px solid black;
  	box-shadow: 0px 1px 1px rgba(0,0,0,.4);
  	    background: #e50914;
  	    color: white;
  	    margin-top:25px;
  }
  .forget{
  	margin-top:25px;
  	font-size: 13px !important;
  }
  .new{
  	float: left;
  	margin-bottom: 45px;
  }
  footer{
  	width: 100%;
  	height: 208px;
  	background: #f3f3f3;
  	float: left;
  	position: relative;
  	bottom: 0;
  	border-top:1px solid black;
  	    color: #777;
  }
  
  .footer-top {
    padding: 0;
    margin: 0 0 30px;
    padding:15px 0px;
    width: 90%;
    margin-left:5%;
    float: left;
    font-size: 15px !important;
}
.footer-top a{
	color: #777;
}
html{
	background: black;

}
body{
	overflow: hidden;
	position: absolute;
	z-index: 5;
	width: 100vw !important;

}
@media screen and (min-height: 900px){
	body{
		    height: -webkit-fill-available;
	}

}
</style>
<body>

<div class="content">
	<div class="header">
		<div class="logo"><img src="img/logo.png"></div>
		<div class="shadow-header"></div>
	</div>
	<div class="login-body">
    <?php if($error_login){ ?>
     <div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Error! </strong><?=$error_login?></div>
    <? } ?>
    <?php if($cadsuccess){ ?>
     <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Sucesso! </strong><?=$cadsuccess?></div>
    <? } ?>

		<noscript data-reactid="9"><div class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div class="ui-message-contents">Parece que o JavaScript está desativado. Ative o JavaScript para restaurar a funcionalidade completa da página.</div></div></noscript>
		<div class="login-content">

			<h1 data-reactid="11">Esqueci Minha Senha</h1>
			<form action="functionPHP/forget.php" method="POST">
			   <p>Enviaremos um email com instruções de como redefinir sua senha.</p><br/><br/>        
            <input type="email" name="email" class="form-control" placeholder="nome@exemplo.com.br" required="required">
             <input type="submit" value="Enviar Por Email"  name="submit">
        <hr data-reactid="43" style="border-top:1px solid #ccc;">
        <span class="new">Novo por aqui? <a href="registrar.php">Inscreva-se agora</a>.</span>
			</form>
		</div>
	</div>
	
</div>

<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<footer>
		<p class="footer-top" data-reactid="63">Dúvidas? Ligue <a class="footer-top-a" href="tel: " data-reactid="65"></a></p>
		<div style=" float: left; width: 100%;"><center>PipocaFlix - 2021</center></div>
	</footer>
  <?php
unset($_SESSION['ErrorCont'],$_SESSION['CadSucess'],$_SESSION['StatusPag']);
   ?>