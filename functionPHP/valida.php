<?php
session_start();
require("../conexao/conexao.php");
//////////////////////////////////////////////////////////////
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$submit = mysqli_real_escape_string($conn, $_POST['submit']);
$md5pass = md5($pass);
////////////////////////////////////////////////////////////

if($_POST){
	if($submit){
		//Conexao
		$sql = mysql_query("SELECT * FROM `login_filmes` WHERE email='$email' && senha ='$md5pass'");
		$pco = mysql_num_rows($sql);
		$pcof = mysql_fetch_assoc($sql);

		if($pco > 0){
			$_SESSION['ApPagt']	  = $pcof['pg_aproved'];
			$_SESSION['ExpireAcc']= $pcof['date_create'];
			$_SESSION['Simultaneo'] = $pcof['simultaneo_max'];
			$_SESSION['IdMembro'] = $pcof['id'];
			$_SESSION['Login']	  = $email;
			?><script type="text/javascript">window.location.href="../browser.php"</script><?

		}elseif($pco == 0){

		$_SESSION['ErrorCont'] = "Login ou Senha Incorreto";
		?><script type="text/javascript">window.history.back(-1);</script><?
		}


	}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}

}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}
?>