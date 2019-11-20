<?php
if(isset($_POST) && isset($_POST["codigosecreto"]) && isset($_POST["codigo"])){

	require_once( 'defines.php' );
	require_once( 'Classes/GoogleAuthenticator.php' );

	$autenticador = new GoogleAuthenticator();

	$codigo_secreto = $_POST["codigosecreto"];

	$codigo_verificador = $_POST["codigo"];

	$resultado = $autenticador->verifyCode($codigo_secreto, $codigo_verificador, 2 );


	if( $resultado ){?>
		<script type="text/javascript">
			alert("Código Válido");
			window.location.href = "<?=WEBSITE?>/admin.php"; 
		</script>
	<?}else{?>
		<script type="text/javascript">
			alert("Código Inválido");
			window.location.href = "<?=WEBSITE?>"; 
		</script>
	<?}

}else{
	$response = array("return"=>false, "msg"=>"Unauthorized");
	
	echo json_encode($response);
}

?>
