<?php

require_once( 'defines.php' );
require_once( 'gerador.php' );

?>

<!DOCTYPE html>
<html>
<head>
	<title>Google Authenticator</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	<div class="form">

		<h2>Login - Google Authenticator</h2>
		<?if($is_registered){?>
			<img src="images/google-authenticator-logo.png"> 
		<?}else{?>
			<img src="<?=$url_qr_code?>"> 
		<?}?>
		
		<form action="verificador.php" method="post" autocomplete="off" class="form-verificador">
			
			<input type="text" name="codigo" placeholder="Security code">
			<input type="hidden" value="<?= $codigo_secreto ?>" name="codigosecreto">

			<button>Login</button>

		</form>
	</div>
</body>
</html>


