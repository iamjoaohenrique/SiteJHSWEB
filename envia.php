<?php


$nome = utf8_decode($_POST['nome']);
$email = utf8_decode($_POST['email']);
$assuntomsg = utf8_decode($_POST['assuntomsg']);
$msg = utf8_decode($_POST['msg']);

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: \"$nome\" <$email>\n";
$headers .= "Return-Path: <$email>\n"; 

$data = date("r");
$assunto = "Contato Online atraves do Site";
$destinatario_email = "joaohs@yahoo.com.br";
$corpo = "<body><span style=\"font-size:12px; color:#1C3367; font-family: Verdana; \"><p>Nome: $nome<br />
Email: $email<br />
Assunto: $assuntomsg<br />
<p>$assunto</p> <br />
<p>Mensagem abaixo :<br />
==========================<br />$msg</p><br />
===================================<br />
<p>&nbsp;</p>
</span>
</body>";
if (mail( 'Destino <'.$destinatario_email.'>', $assunto, $corpo, $headers )){
		echo "<script>window.location='index.html';alert('Sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
	}
  	else{
		echo "</b>Falha no envio do E-Mail!</b>";
	}
header("Location: index.html");
?>