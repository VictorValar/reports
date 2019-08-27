<?php


if (isset($_POST['submit']))
{

	//POST
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$paymentAmount = $_POST['paymentAmount'];
	$message = $_POST['message'];

	//Mail Info
	$mailTo = "victor.ribeiro@3wpublicidade.com.br";
	$subject = "Solicitaчуo de Boleto Google Ads";
	$headers = "From: ".$email;
	$txt = "Vocъ estс recebendo uma solicitaчуo de boleto do Google Ads no valor de ".$paymentAmount.".\n\n".$name." .\n\n".$tel.".\n\n".$email.".\n\n".$message.".\n\n ";

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsent");

}
//<!-- Mail -->
//$mailTo = "victor.ribeiro@3wpublicidade.com.br";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: victor.ribeiro@3wpublicidade.com.br" . "\r\n" .
//"CC: victor.ribeiro@3wpublicidade.com.br";
//mail($to,$subject,$txt,$headers);


?>