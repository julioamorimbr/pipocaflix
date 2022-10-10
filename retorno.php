<?php
    require("conexao/conexao.php");
    header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
    
    if($_POST){
    
        $notification = mysqli_real_escape_string($conn, $_POST['notificationType']);
        if($notification != NULL && (isset($notification)) ){
        $notification_code =mysqli_real_escape_string($conn,  $_POST['notificationCode']);
        
             $email = "icasercelulares@gmail.com"; //SEU EMAIL DO PAGSEGURO
            $token = "E7978E5D507E43F8B298D96DF0405BF0"; //SEU TOKEN DO PAGSEGURO
            $url = "https://ws.pagseguro.uol.com.br/v2/transactions/notifications/".$notification_code."?email=".$email."&token=".$token."";
            //curl
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            $xml= curl_exec($curl);
            curl_close($curl);
            $xml    =    simplexml_load_string($xml);
    
                /////////////////////////////////////
                $cod        = $xml -> code;
                $refe        = $xml -> reference;
                $status     = $xml -> status;
                $cod        =   str_replace("-", "", $cod);
                                


            if($status == "3"){
                      
                      // Inclui o arquivo class.phpmailer.php localizado na pasta class
                       
                         $usuario = mysql_query("SELECT * FROM `login_filmes` WHERE cod_pagamento='$refe' LIMIT 1 ");
                         $user = mysql_fetch_assoc($usuario);
                         $userid= $user['id'];
                         
                         
                         
                         $aprovad	=	"1";
                         ////////////////////////////////////////////////////////////////////
                         $save = mysql_query("UPDATE `login_filmes` SET `validate`='1', `pg_aproved`='1' WHERE id='$userid'");
                        
                         
 
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'mail.starplaytv.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 25; //  Usar 587 porta SMTP
     $mail->Username = 'suporte@starplaytv.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = '13121536'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('suporte@starplaytv.com.br', 'StarFlix'); //Seu e-mail
     $mail->AddReplyTo('suporte@starplaytv.com.br', 'StarFlix '); //Seu e-mail
     $mail->Subject = 'Pagamento Aprovado PagSeguro';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('financeiro@starplaytv.com.br', 'StarFlix');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
 
     //Define o corpo do email
     $mail->MsgHTML("Novo Pagamento Aprovado. Usuario: ".$user['email'].""); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     echo "";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
                         
                         ///////////////////////////////////////////////////////////////////
                         
                       
            }
            }else{
        ?><script>window.history.back(-1);</script><?php
        }
        }else{
        ?><script>window.history.back(-1);</script><?php
        }

?>