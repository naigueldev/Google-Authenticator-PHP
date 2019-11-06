<?php

require_once( 'defines.php' );
require_once( 'gerador.php' );

?>

<!DOCTYPE html>
<html>
<head>
	<title>Google Authenticator</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<!-- <div class="container">

		<div class="content-title text-center">
			<h3>Login - Google Authenticator</h3>
		</div>
		<div class="row ">

			<div class="img">
				<img src="<?=$url_qr_code?>">
			</div>
			
			<form action="verificador.php" method="post" autocomplete="off" class="form-verificador">
				
				<input type="text" name="codigo" placeholder="Codigo de Seguranca">

				<button>Verificar</button>

				<input type="hidden" value="<?= $codigo_secreto; ?>" name="codigosecreto">

			</form>
		</div>
	</div> -->




	<div class="form">

		<img src="<?=$url_qr_code?>"> 
		
		<form action="verificador.php" method="post" autocomplete="off" class="form-verificador">
			
			<input type="text" name="codigo" placeholder="Codigo de Seguranca">
			<input type="hidden" value="<?= $codigo_secreto ?>" name="codigosecreto">

			<button>Sign in</button>

		</form>
	</div>
</body>
</html>


