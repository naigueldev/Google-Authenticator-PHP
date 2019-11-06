<?php

require_once( 'gerador.php' );

?>

<!DOCTYPE html>
<html>
<head>
	<title>Google Authenticator</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="container">
		<div class="row">

			<div class="img">
				<img src="<?=$url_qr_code?>">
			</div>
			
			<form action="verificador.php" method="post" autocomplete="off" class="form-verificador">
				
				<input type="text" name="codigo" placeholder="Codigo de Seguranca">

				<button>Verificar</button>

				<input type="hidden" value="<?php echo $codigo_secreto; ?>" name="codigosecreto">

			</form>
		</div>
	</div>
</body>
</html>


