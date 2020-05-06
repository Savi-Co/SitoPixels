<?php
$nome = $_GET['nome'];
$nome = filter_var($nome, FILTER_SANITIZE_STRING);
$cognome = $_GET['cognome'];
$cognome = filter_var($cognome, FILTER_SANITIZE_STRING);
$email = $_GET['email'];
if (filter_var($emailValida, FILTER_VALIDATE_EMAIL) == false) 
{
	echo "$emailValida non valida";
}
$nomeAzienda = $_GET['nomeAzienda'];
$nomeAzienda = filter_var($nomeAzienda, FILTER_SANITIZE_STRING);
?>

