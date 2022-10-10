<?php
session_start();
require("../conexao/conexao.php");
$email = mysqli_real_escape_string($con, $_POST['emailid']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$submit = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['password']);
$ipfix	   =getenv("REMOTE_ADDR");
date_default_timezone_set('Brazil/East');

$consult	=	mysql_query("SELECT * FROM `ausent` WHERE login='$email'");
$consulta	=	mysql_num_rows($consult);
$cons 		=	mysql_fetch_assoc($consult);

$datahj 	=	date("d-m-Y");
$horahj 	=	date("H:i:s");
if($consulta > "0"){
	if($datahj >= $cons['data']){
		if($horahj >= $$cons['expire']){
			$exl = mysql_query("DELETE FROM `ausent` WHERE login='$email'");
			?><script type="text/javascript">window.location.href="home.php"</script><?
		}
	}
}
if($consulta > "0"){
	$_SESSION['ErrorLogin']		=	"Você Errou Muitas vezes Aguarde 5 Minutos";
?><script type="text/javascript">window.location.href="home.php"</script><?
}
if ($consulta == "0") {
if($submit){

	if($email != NULL && $password != NULL){

		$sql	=	mysql_query("SELECT * FROM `login_filmes` WHERE email='$email' && senha='$password' LIMIT 1");
		$perfil	=	mysql_fetch_assoc($sql);
		$conta 	=	mysql_num_rows($sql);
		if($conta == "0"){
		$_SESSION['ErrorLogin']		=	"Login Ou Senha Incorreto";
		?><script type="text/javascript">window.location.href="home.php"</script><?
	}
		if( $conta > "0"){
		$nivel 	   = $perfil['nivel'];
		if($nivel == "1"){

		$id_membro = $perfil['id'];
		$login	   = $perfil['email'];
		$pass 	   = $perfil['senha'];
		$ip		   = $perfil['ip'];

		if($pass == $password){
		
		$_SESSION['IdADMIN']	=	$id_membro;
		$_SESSION['LoginADMIN'] = 	$login ;
		$_SESSION['PassADMIN']	=	$pass;
		$cad = mysql_query("INSERT INTO `auth`(`ip`, `hour`, `date`) VALUES ('$ipfix', '$horahj', '$datahj')");
		?><script type="text/javascript">window.location.href="index.php"</script><?
	}elseif($pass != $password){
		$_SESSION['ErrorLogin']		=	"Login Ou Senha Incorreto";
		?><script type="text/javascript">window.location.href="home.php"</script><?
	}
	}if($nivel == "0"){
		$hora 	=	date("H:i:s");
		$newdate=  date('H:i:s', strtotime('+5 minute', strtotime($hora)));
		$date 	=	date("d-m-Y");
		
		$insert	=	mysql_query("INSERT INTO `failauth`( `login`, `pass`, `ip`) VALUES ('$email', '$password', '$ipfix')");

		$select = mysql_query("SELECT * FROM `failauth` WHERE login ='$email'");
		$var	=	mysql_num_rows($select);

		?><script type="text/javascript">window.history.back(-1)</script><?

		if($var > "3"){
			$insert	=	mysql_query("INSERT INTO `ausent`(`expire`, `login`, `data`) VALUES ('$newdate', '$email', '$date')");
			$_SESSION['ErrorLogin']		=	"Você Errou Muitas vezes Aguarde 5 Minutos";
			?><script type="text/javascript">window.history.back(-1)</script><?
		}
		
	}
	}elseif($conta == "0"){
		$hora 	=	date("H:i:s");
		$newdate=  date('H:i:s', strtotime('+5 minute', strtotime($hora)));
		$date 	=	date("d-m-Y");
		
		$insert	=	mysql_query("INSERT INTO `failauth`( `login`, `pass`, `ip`) VALUES ('$email', '$senha', '$ipfix')");

		$select = mysql_query("SELECT * FROM `failauth` WHERE login ='$email'");
		$var	=	mysql_num_rows($select);
		?><script type="text/javascript">window.history.back(-1)</script><?
		if($var > "3"){
			$insert	=	mysql_query("INSERT INTO `ausent`(`expire`, `login`, `data`) VALUES ('$newdate', '$email', '$date')");
			$_SESSION['ErrorLogin']		=	"Você Errou Muitas vezes Aguarde 5 Minutos";
			?><script type="text/javascript">window.history.back(-1)</script><?
		}
	}
	}elseif ($email == NULL or $password == NULL) {
		?><script type="text/javascript">window.history.back(-1)</script><?php
	}
}else{
	?><script type="text/javascript">window.history.back(-1)</script><?php
}
}

?>