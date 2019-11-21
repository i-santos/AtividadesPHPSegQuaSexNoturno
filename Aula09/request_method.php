<?php 
// Variáveis Super Globais
$method = $_SERVER["REQUEST_METHOD"];

$ehGet = $method == "GET";


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Request Method</title>
</head>
<body>

	<?php if( $ehGet ) { ?>
	
		<h1>Título da página</h1>
		<p>Bem-vindo</p>
		
		<form>
		
		</form>
		
	
	<?php } else { ?>
	
		<p>Request feito com sucesso!</p>
	
	 <?php } ?>
</body>
</html>