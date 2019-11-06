<?php

	require_once( 'vendor/autoload.php' );

	require_once( 'vendor/PHPGangsta/GoogleAuthenticator.php' );

	$autenticador = new GoogleAuthenticator();

	$codigo_secreto = $autenticador->createSecret();

	$website = WEBSITE;
	$titulo = "NaiguelGoogleAutenticador";
	$url_qr_code = $autenticador->getQRCodeGoogleUrl( $titulo, $codigo_secreto, $website );

?>


