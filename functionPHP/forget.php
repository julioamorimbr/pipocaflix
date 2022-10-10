<?php
session_start();
require("../conexao/conexao.php");
require_once("../class/class.phpmailer.php");
$email = mysqli_real_escape_string($con, $_POST['email']);
$submit = mysqli_real_escape_string($con, $_POST['submit']);

if($submit){

	$consulta = mysql_query("SELECT * FROM login_filmes WHERE email ='$email'") or die (mysql_error());
	$dados	  = mysql_fetch_assoc($consulta);
	$num_rows = mysql_num_rows($consulta);
	if($num_rows > 0){
	
		$token = uniqid(rand(000000000000,	900000000000000000));
		$token = str_replace("-", "", $token);
		$idMembro = $dados['id'];
		$token_c = mysql_query("INSERT INTO `forget`(`token`, `id_m`) VALUES ('$token','$idMembro')") or die(mysql_error());
		if($token_c){
		
			// Inicia a classe PHPMailer
				$mail = new PHPMailer(true);
				 
				// Define os dados do servidor e tipo de conexão
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				 
				try {
				      $mail->Host = 'mail.starplaytv.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    				      $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     				      $mail->Port       = 25; //  Usar 587 porta SMTP
     				      $mail->Username = 'configsmtp@starplaytv.com.br'; // Usuário do servidor SMTP (endereço de email)
    			      	      $mail->Password = '123789456'; // Senha do servidor SMTP (senha do email usado)
 
				 
				     //Define o remetente
				     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
				     $mail->SetFrom('suporte@starplaytv.com.br', 'Password Recovery'); //Seu e-mail
				     $mail->AddReplyTo('suporte@starplaytv.com.br', 'Password Recovery'); //Seu e-mail
				     $mail->Subject = 'Password Recovery StarFlix';//Assunto do e-mail
				 
				 
				     //Define os destinatário(s)
				     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				     $mail->AddAddress($email, 'Password Recovery');
				 
				     //Campos abaixo são opcionais 
				     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
				     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
				     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
				 
				 
				     //Define o corpo do email
				     $mail->MsgHTML("Verificamos que você esqueceu sua senha. Para Recupera-la <a href='https://www.starplaytv.com.br/recovery.php?token=".$token."'>Clique Aqui</a> Ou Acesse https://www.starplaytv.com.br/recovery.php?token=".$token); 
				 
				     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
				     //$mail->MsgHTML(file_get_contents('arquivo.html'));
				 
				     $mail->Send();
				    
				    $_SESSION['CadSucess'] = "Foi Enviado um email de seguraça, contendo as proximas instruções.";

				 ?> <script type="text/javascript">window.history.back(-1)</script><?

				    //caso apresente algum erro é apresentado abaixo com essa exceção.
				    }catch (phpmailerException $e) {
				      echo $e->errorMessage(); 
				      $_SESSION['ErrorCont'] = $e->errorMessage();
				      ?> <script type="text/javascript">window.history.back(-1)</script><?

				}
		}
?> <script type="text/javascript">window.history.back(-1)</script><?
	}
	
	
	elseif($num_rows == 0){
		$_SESSION['ErrorCont'] = "Conta Inexistente!";
		?> <script type="text/javascript">window.history.back(-1)</script><?
	}
}else{
	?> <script type="text/javascript">window.history.back(-1)</script><?
}
?>