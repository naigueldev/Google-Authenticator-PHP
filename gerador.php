
<?

	require_once( 'Classes/GoogleAuthenticator.php' );

	$autenticador = new GoogleAuthenticator();

	$dirname = dirname(__FILE__);

	$folder = $dirname."/database";

	$filename = $folder."/db.json";

	$content = file_get_contents($filename);

	// pegar código salvo no banco de dados no formato array
	$db_data = json_decode($content, true);

	if(!isset($db_data['secret'])){
		// criar um novo código, caso não exista cadastro
		
		$codigo_secreto = $autenticador->createSecret();

		$content_secret = array("secret"=>$codigo_secreto);

		$content_secret = json_encode($content_secret);

		// salvar no banco de dados o código gerado
		file_put_contents($filename, $content_secret);
	
	}else{
		// pegar o código do banco de dados caso ele exista

		$codigo_secreto = $db_data['secret'];

	}

	$is_registered = (isset($db_data['secret'])) ? true : false;

	$website = WEBSITE;
	$username = "nome de usuario logado";
	$titulo = $username." - Google Autenticador";

	$titulo = trim(preg_replace('/\s+/', '', $titulo));

	$url_qr_code = $autenticador->getQRCodeGoogleUrl( $titulo, $codigo_secreto, $website );
?>

