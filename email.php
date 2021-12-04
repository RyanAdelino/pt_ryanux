<?php 

	ini_set('display_errors',1);
  	ini_set('display_startup_erros',1);
  	error_reporting(E_ALL);

	if (isset($_POST['Email'] && !empty($_POST['Email']){


	$nome = addslashes($_POST['First Name']);
	$sobrenome = addslashes($_POST['Last Name']);
	$email = addslashes($_POST['Email']);
	$assunto = addslashes($_POST['Message Subject']);
	$mensagem = addslashes($_POST['Drop your message here']);



	$to = "ryan.adelino@protonmail.com";
	$subject = "Proposta - Teste";
	$body = "Nome: ".$nome "\r\n".
		"Email: ".$email. "\r\n".
		"Mensagem: ".$mensagem;
	$header = "From:ryan.adelino@protonmail.com"."\r\n".
			"Reply-to:".$email."r/n".
			"X-Mailer:PHP/".phpversion();

	if(mail($to, $subject, $body, $header){
		echo("Email sent successfully!");

	 }

	

 	

	else{
		echo("Email not sent.");
	 }


	
?>

